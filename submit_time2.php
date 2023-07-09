<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
<?php
  function validateTime($t) {
    return preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#', $t);
  }

  include('settings.php');
  include('functions.php');
  $raceid = $_POST['raceid'];
  $name = $_POST['name'];
  $time = $_POST['time'];
  $comments = $_POST['comments'];
  if(empty($time)) {
    die("Form Broke Somehow");
  }
  if(validateTime($time) == 0) {
    echo '    <title>Submission Failed</title>' . PHP_EOL . '  </head>' . PHP_EOL . '  <body>' . PHP_EOL . '    <p class="return"><a href="./index.php">Return To Search</a></p>'. PHP_EOL . '    <h1>Submission Failed - Time Not In Correct Format</h1>' . PHP_EOL . '    <p style="text-align: center;"><form action="./submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL . '  </body>' . PHP_EOL . '</html>';
  } else {
    $conn = new mysqli($server,$user,$pass,$db);
    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }
    $stmt = $conn->prepare("SELECT url, mode FROM races WHERE id = ?");
    $stmt->bind_param("i", $raceid);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      $url = str_replace('/alttpr/','',$row['url']);
      $mode = $row['mode'];
    }
    $stmt->close();
    $stmt = $conn->prepare("SELECT * FROM times WHERE race_id = ? AND name = ?");
    $stmt->bind_param("is", $raceid, $name);
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->num_rows;
    $stmt->close();
    if($rows > 0) {
      echo '    <title>Submission Failed</title>' . PHP_EOL . '  </head>' . PHP_EOL . '  <body>' . PHP_EOL . '    <p class="return"><a href="./index.php">Return To Search</a></p>' . PHP_EOL . '    <h1>Submission Failed - Result Already Entered For This Race and User</h1>' . PHP_EOL . '    <p style="text-align: center;"><form action="./submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form>&nbsp;<form method="post" action="./view_time.php"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="View Times"></form></p>' . PHP_EOL . '  </body>' . PHP_EOL . '</html>';
    } else {
      $stmt = $conn->prepare("INSERT INTO times (race_id, name, time, comments, from_racetime) VALUES (?, ?, ?, ?, 'n')");
      $stmt->bind_param("isss", $raceid, $name, $time, $comments);
      $stmt->execute();
      $stmt->close();
      echo '    <title>Submission Accepted</title>' . PHP_EOL . '  </head>' . PHP_EOL . '  <body>' . PHP_EOL . '    <p class="return"><a href="./index.php">Return To Search</a></p>' . PHP_EOL . '    <h1>Your time has been accepted!</h1>';
      echo '    <p class="header">' . $url . ' times</p>' . PHP_EOL;
      echo '    <table class="times">' . PHP_EOL;
      echo '      <tr><th>Name</th><th>Time</th></tr>' . PHP_EOL;
      $stmt = $conn->prepare("SELECT name, time, comments, from_racetime FROM times WHERE race_id = ? ORDER BY time ASC");
      $stmt->bind_param("i", $raceid);
      $stmt->execute();
      $result=$stmt->get_result();
      while($row = $result->fetch_assoc()) {
        if($row['from_racetime'] == 'n') {
          if(!empty($row['comments'])) {
            echo '      <tr><td class="new">' . $row['name'] . '<span class="comments" title="' . htmlentities($row['comments']) . '">[Comment]</span></td><td class="new">' . $row['time'] . '</td></tr>' . PHP_EOL;
          } else {
            echo '      <tr><td class="new">' . $row['name'] . '</td><td class="new">' . $row['time'] . '</td></tr>' . PHP_EOL;
          }
       } else { 
          if(!empty($row['comments'])) {
            echo '      <tr><td>' . $row['name'] . '<span class="comments" title="' . htmlentities($row['comments']) . '">[Comment]</span></td><td>' . $row['time'] . '</td></tr>' . PHP_EOL;
          } else {
            echo '      <tr><td>' . $row['name'] . '</td><td>' . $row['time'] . '</td></tr>' . PHP_EOL;
          }
        }
      }
      $stmt->close();
      echo '    </table>' . PHP_EOL;
    }
  }
  $stmt = $conn->prepare("SELECT * FROM times WHERE race_id = ?");
  $stmt->bind_param("i", $raceid);
  $stmt->execute();
  $result = $stmt->get_result();
  $rows = $result->num_rows;
  $players = $rows;
  $stmt->close();
  $stmt = $conn->prepare("UPDATE races SET players = ? WHERE id = ?");
  $stmt->bind_param("ii", $players, $raceid);
  $stmt->execute();
  $stmt->close();
  if(empty($mode)) {
    echo "<p>No Race Found Somehow?</p>" . PHP_EOL;
  } else {
    echo '    <hr>' . PHP_EOL . '<p class="header">More ' . htmlentities($mode) . ' seeds</p>' . PHP_EOL;
    echo '    <table style="width: 90%;">' . PHP_EOL;
    echo '      <tr><th width="85 px">Date</th><th>RaceTime Room</th><th width="75 px">Seed Link</th><th width="145 px">Hash</th><th>Description</th><th>Players</th><th>Permalink</th><th colspan="2">Submit/View Times</th></tr>' . PHP_EOL;
    $stmt = $conn->prepare("SELECT id, date, url, seed, hash, description, players FROM races WHERE mode LIKE ? ORDER BY date DESC");
    $stmt->bind_param("s", $mode);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      if(strlen($row['description']) > 75) {
        $description = substr($row['description'], 0, 72) . '...';
      } else {
        $description = $row['description'];
      }
      echo '      <tr><td style="text-align: center;">' . htmlentities($row['date']) . '</td><td><a href="https://racetime.gg' . htmlentities($row['url']) . '" target="_blank" rel="noreferrer noopener">' . str_replace('/alttpr/','',$row['url']) . '</a></td><td style="text-align: center;"><a href="' . htmlentities($row['seed']) . '" target="_blank" rel="noreferrer noopener">Seed Link</a></td><td>' . hashToImages($row['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;">' . $row['players'] . '</td><td style="text-align: center;"><a href="https://projects.thecleanupstep.com/races/' . $row['id'] . '" target=_blank" rel="noreferrer noopener">Permalink</a></td>';
      $stmt2 = $conn->prepare("SELECT * FROM times WHERE race_id = ?");
      $stmt2->bind_param("i", $row['id']);
      $stmt2->execute();
      $result2 = $stmt2->get_result();
      $rows = $result2->num_rows;
      if($rows > 0) {
        echo '<td style="text-align: center;"><form action="./submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td><td style="text-align: center;"><form action="./view_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="View Times"></form></td>';
      } else {
        echo '<td colspan="2" style="text-align: center;"><form action="./submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td>';
      }
      echo '</tr>' . PHP_EOL;
      $stmt2->close();
    }
    echo "    </table>" . PHP_EOL;
    $stmt->close();
  }
  echo '  </body>' . PHP_EOL . '</html>';
?>
