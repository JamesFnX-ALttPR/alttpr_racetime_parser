<!DOCTYPE html>
<html>
  <head>
    <title>RaceTime Race Results</title>
    <link rel="stylesheet" href="https://projects.thecleanupstep.com/styles.css">
  </head>
  <body>
<?php
include('settings.php');
include('functions.php');
$conn = new mysqli($server,$userro,$passro,$db);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$id = $_GET['id'];
if(empty($id)) {
  echo "<p>Race Not Found</p>" . PHP_EOL;
} else {
  $stmt = $conn->prepare("SELECT date, url, mode, seed, hash, description, players FROM races WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  echo '    <p class="return"><a href="https://projects.thecleanupstep.com/index.php">Return To Search</a></p>'. PHP_EOL;
  echo '    <table style="width: 90%;">' . PHP_EOL;
  echo '      <tr><th width="85 px">Date</th><th>RaceTime Room</th><th>Mode</th><th width="75 px">Seed Link</th><th width="145 px">Hash</th><th>Description</th><th>Players</th><th>Finishers</th><th colspan="2">Submit/View Times</th></tr>' . PHP_EOL;
  while($row = $result->fetch_assoc()) {
    if(strlen($row['description']) > 75) {
      $description = substr($row['description'], 0, 72) . '...';
    } else {
      $description = $row['description'];
    }
    echo '      <tr><td style="text-align: center;">' . htmlentities($row['date']) . '</td><td style="text-align: center;"><a href="https://racetime.gg' . htmlentities($row['url']) . '" target="_blank" rel="noreferrer noopener">' . str_replace('/alttpr/','',$row['url']) . '</a></td><td style="text-align: center;">' . $row['mode'] . '</td><td style="text-align: center;"><a href="' . htmlentities($row['seed']) . '" target="_blank" rel="noreferrer noopener">Seed Link</a></td><td>' . hashToImages($row['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;">' . $row['players'] . '</td>';
    $stmt2 = $conn->prepare("SELECT * FROM times WHERE race_id = ? AND time !=95959");
    $stmt2->bind_param("i", $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $rows = $result2->num_rows;
    if($rows > 0) {
      echo '<td style="text-align: center;"><span id="finishers" style="visibility: hidden;">' . $rows . '</span></td><td style="text-align: center;"><form action="https://projects.thecleanupstep.com/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $id . '"><input type="submit" value="Input Time"></form></td><td style="text-align: center;"><form action="https://projects.thecleanupstep.com/view_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $id . '"><input type="submit" value="View Times"></form></td>';
    } else {
      echo '<td style="text-align: center;"><span id="finishers" style="visibility: hidden;">0</span></td><td colspan="2" style="text-align: center;"><form action="https://projects.thecleanupstep.com/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $id . '"><input type="submit" value="Input Time"></form></td>';
    }
    echo '</tr>' . PHP_EOL;
    $stmt2->close();
  }
  echo "    </table><br>" . PHP_EOL;
  $stmt->close();
  echo '    <p id="racers" class="racers" style="visibility: hidden;">Participants: ';
  $stmt2 = $conn->prepare("SELECT name FROM times WHERE race_id = ? ORDER BY name DESC LIMIT 1");
  $stmt2->bind_param("i", $id);
  $stmt2->execute();
  $result2 = $stmt2->get_result();
  while($row2 = $result2->fetch_assoc()) {
    $lastname = $row2['name'];
  }
  $stmt = $conn->prepare("SELECT name, from_racetime FROM times WHERE race_id = ? ORDER BY name");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  while($row = $result->fetch_assoc()) {
    if($row['name'] == $lastname) {
      if($row['from_racetime'] == 'n') {
        echo '<span class="new">'. $row['name'] . '</span>';
      } else {
        echo $row['name'];
      }
    } else {
      if($row['from_racetime'] == 'n') {
        echo '<span class="new">'. $row['name'] . '</span>, ';
      } else {
        echo $row['name'] . ', ';
      }
    }
  }
  echo '<br><span style="font-size: small;">(Participants in <span class="new">blue</span> did not run the original race.)</span></p>' . PHP_EOL;
}
?>
  <div style="text-align: center;"><input type="button" value="View Finishers" id="showfinish" onclick="toggleFinish(this)" class="index-button"></div>
  <div style="text-align: center;"><input type="button" value="View Participants" id="showracers" onclick="toggleRacers(this)" class="index-button"></div>
  </body>
  <script>
    function toggleFinish(ele) {
      var vis = document.getElementById('finishers');
      if (vis.style.visibility == 'visible') {
        vis.style.visibility = 'hidden';
        document.getElementById(ele.id).value = "View Finishers";
      }
      else {
        vis.style.visibility = 'visible';
        document.getElementById(ele.id).value = "Hide Finishers";
      }
    }
    function toggleRacers(ele) {
      var vis = document.getElementById('racers');
      if (vis.style.visibility == 'visible') {
        vis.style.visibility = 'hidden';
        document.getElementById(ele.id).value = "View Participants";
      }
      else {
        vis.style.visibility = 'visible';
        document.getElementById(ele.id).value = "Hide Participants";
      }
    }
  </script>

</html>
