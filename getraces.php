<?php
// Grab DB settings and shared functions
include('settings.php');
include('functions.php');
// Get current time and prepare file handler for logfile
date_default_timezone_set('America/Los_Angeles');
$timestamp = date('Ymd');
$logfile = './logs/' . $timestamp . '.log';
$fp = fopen($logfile, "a");
$header = date('Y-m-d H:i') . PHP_EOL;
fwrite($fp, $header);
// Define DB connection
$conn = new mysqli($server,$user,$pass,$db);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
// Grab data from RaceTime API
for($n=1;$n<=20;$n++) {
  $url = "https://racetime.gg/alttpr/races/data?page=" . $n;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  $output = curl_exec($ch);
  $outputArray = explode(', ',$output);
  $parsed = '';
  foreach($outputArray as $str) {
        // Parse the API data
    [$label, $content] = parseAPI($str);
    if($label == 'url') {
      $parsed = $parsed . $content . '||';
    }
    if($label == 'info') {
      [$a, $b, $c] = parseInfo($content);
      [$d, $e] = parseHashDesc($c);
      $parsed = $parsed . $a . '||' . $b . '||' . $d . '||' . $e . '||';
    }
    if($label == 'entrants_count') {
      $parsed = $parsed . $content . '||';
    }
    if($label == 'started_at') {
      $parsed = $parsed . parseDate($content) . '|_|_|';
    }
  }
  $parsedArray = explode('|_|_|',$parsed);
  foreach($parsedArray as $str) {
        // Check if race format is valid
    if(validateData($str) == 'true') {
      $pieces = explode('||',$str);
      $url = $pieces[0];
      $mode = $pieces[1];
      $seed = $pieces[2];
      $hash = $pieces[3];
      $desc = $pieces[4];
      $players = $pieces[5];
      $date = $pieces[6];
      $stmt = $conn->prepare("SELECT * from races WHERE url LIKE ?");
      $stmt->bind_param("s", $url);
      $stmt->execute();
      $result = $stmt->get_result();
      $rows = $result->num_rows;
          // Check if race already exists and stop if it does
      if($rows > 0) {
                $logentry = $url . ' matched database entry' . PHP_EOL;
                fwrite($fp, $logentry);
        break 2;
      } else {
        $stmt2 = $conn->prepare("INSERT INTO races (date, url, mode, seed, hash, description, players) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bind_param("ssssssi", $date, $url, $mode, $seed, $hash, $desc, $players);
        $stmt2->execute();
        $stmt2->close();
        $logentry = $date . ' ' . $url . ' ' . $mode . ' added to races' . PHP_EOL;
        fwrite($fp, $logentry);
        $stmt2 = $conn->prepare("SELECT id FROM races WHERE url LIKE ?");
        $stmt2->bind_param("s", $url);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        while($row = $result2->fetch_assoc()) {
          $temp = $row['id'];
        }
        $raceid = $temp;
        $stmt2->close();
        $page = $url;
        $url2 = 'https://racetime.gg' . $page . '/data';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $output2 = curl_exec($ch);
        $outputArray2 = explode(', ',$output2);
        $parsed = '';
        foreach($outputArray2 as $str) {
          [$label, $content] = parseAPI($str);
          if($label == 'ended_at') {
            break;
          }
          if($label == 'full_name') {
            $parsed = $parsed . parseName($content) . '||';
          }
          if($label == 'finish_time') {
            $parsed = $parsed . convertTime($content) . '||';
          }
          if($label == 'comment') {
            $parsed = $parsed . parseComment($content) . '|_|_|';
          }
        }
        $parsedArray2 = explode('|_|_|', $parsed);
        foreach($parsedArray2 as $str) {
          $pieces2 = explode('||',$str);
          $name = $pieces2[0];
          $time = $pieces2[1];
          $comment = $pieces2[2];
          if($time != '') {
            $stmt3 = $conn->prepare("INSERT INTO times (race_id, name, time, comments, from_racetime) VALUES (?, ?, ?, ?, 'y')");
            $stmt3->bind_param("isss", $raceid, $name, $time, $comment);
            $stmt3->execute();
            $stmt3->close();
            $logentry = $name . ' ' . $time . ' added to times with comment "' . $comment . '"' . PHP_EOL;
            fwrite($fp, $logentry);
          }
        }
      }
      $stmt->close();
    }
  }
}
fclose($fp);
?>
