<?php
include('./functions.php');
include('settings.php');
$raceid = $_POST['race_id'];
if(empty($raceid)) {
  die('No Race Found Somehow?');
}
$conn = new mysqli($server,$user,$pass,$db);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT * FROM times WHERE race_id = ?");
$stmt->bind_param("i",$raceid);
$stmt->execute();
$result=$stmt->get_result();
$rows=$result->num_rows;
if($rows > 0) {
  $seeded = 'true';
} else {
  $seeded = 'false';
}
$stmt->close();
if($seeded == 'false') {
  $stmt = $conn->prepare("SELECT url FROM races WHERE id = ?");
  $stmt->bind_param("i", $raceid);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    $page = $row['url'];
    $handle = curl_init();
    $url = 'https://racetime.gg' . $page . '/data';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $output = curl_exec($ch);
    $outputArray = explode(', ',$output);
    $parsed = '';
    foreach($outputArray as $str) {
      [$label, $content] = parseAPI($str);
      if($label == 'ended_at') {
        break;
      }
      if($label == 'full_name') {
        $parsed = $parsed . parseName($content) . '||';
      }
      if($label == 'finish_time') {
        $parsed = $parsed . convertTime($content) . '|_|_|';
      }
    }
    $parsedArray = explode('|_|_|', $parsed);
    foreach($parsedArray as $str) {
      $pieces = explode('||',$str);
      $name = $pieces[0];
      $time = $pieces[1];
      if($time != '') {
        $stmt2 = $conn->prepare("INSERT INTO times (race_id, name, time, from_racetime) VALUES (?, ?, ?, 'y')");
        $stmt2->bind_param("iss", $raceid, $name, $time);
        $stmt2->execute();
        $stmt2->close();
      }
    }
  }
  $stmt->close();
}
$stmt = $conn->prepare("SELECT url, mode, hash FROM races WHERE id = ?");
$stmt->bind_param("i", $raceid);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $url = $row['url'];
  $url = str_replace('/alttpr/','',$url);
  $mode = $row['mode'];
  $hash = $row['hash'];
  $parsedHash = hashToImages($hash);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Submit Your Time</title>
  </head>
<body>
<p class="return"><a href="./index.php">Return To Search</a></p>
<p class="header"><?= $mode ?> - <?= $url ?><br /><?= $parsedHash ?></p>
<table class="submit">
<tr><td class="submitLabel"><form method="post" action="./submit_time2.php"><label for="name">Your Name:</label></td><td class="submitField"><input type="text" id="name" name="name"></td></tr><tr><td class="submitLabel"><label for="time">Your Time (H:mm:ss format):</td><td class="submitField"><input type="text" id="time" name="time"></td></tr><tr><td class="submitLabel"><label for"comments">Comments:</td><td class="submitField"><input type="text" id="comments" name="comments"></td></tr><tr><td colspan="2" class="submitButton"><input type="hidden" id="raceid" name="raceid" value="<?= $raceid ?>"><input type="submit" value="Submit Time"></form></td></tr>
</table>
</body>
</html>
