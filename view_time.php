<?php
  include('settings.php');
  include('functions.php');
  $domain = getRequestURL();
  $conn = new mysqli($server,$user,$pass,$db);
  if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
  $raceid = $_POST['race_id'];
  if(empty($raceid)) {
    die("Something Bad Happened");
  }
  $stmt = $conn->prepare("SELECT url, mode FROM races WHERE id = ? LIMIT 1");
  $stmt->bind_param("i",$raceid);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $url = str_replace('/alttpr/','',$row['url']);
  $mode = $row['mode'];
  $stmt->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Results for <?= $url ?></title>
  </head>
  <body>
    <p class="return"><?php echo'<a href="' . $domain; ?>/index.php">Return To Search</a></p>
    <p class="header" style="font-family: 'Return of Ganon'; font-size: xx-large; font-weight: normal;"><?= $mode ?><br /><a target="_blank" href="https://racetime.gg/alttpr/<?= $url ?>"><?= $url ?></a> times</p>
    <p style="font-weight: bold; color: rgb(0, 190, 190); text-align: center;">Asynced times in blue</p>
    <table class="times">
      <tr><th>Name</th><th>Time</th></tr>
<?php
  $stmt = $conn->prepare("SELECT name, time, comments, from_racetime FROM times WHERE race_id = ? ORDER BY time ASC");
  $stmt->bind_param("i", $raceid);
  $stmt->execute();
  $result=$stmt->get_result();
  $racers = $result->num_rows;
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
  $stmt = $conn->prepare("UPDATE races SET players = ? WHERE id = ?");
  $stmt->bind_param("ii", $racers, $raceid);
  $stmt->execute();
  $stmt->close();
?>
    </table>
    <br /><hr>
<?php
if(empty($mode)) {
  echo "<p>No Race Found Somehow?</p>" . PHP_EOL;
} else {
  echo '    <p class="header" style="font-family: ' . "Return of Ganon" . '; font-size: xx-large; font-weight: normal;">' . htmlentities($mode) . ' seeds</p>' . PHP_EOL;
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
    echo '      <tr><td style="text-align: center;">' . htmlentities($row['date']) . '</td><td><a href="https://racetime.gg' . htmlentities($row['url']) . '" target="_blank" rel="noreferrer noopener">' . str_replace('/alttpr/','',$row['url']) . '</a></td><td style="text-align: center;"><a href="' . htmlentities($row['seed']) . '" target="_blank" rel="noreferrer noopener">Seed Link</a></td><td>' . hashToImages($row['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;">' . $row['players'] . '</td><td style="text-align: center;"><a href="' . $domain . '/races/' . $row['id'] . '" target="_blank">Permalink</a></td>';
    $stmt2 = $conn->prepare("SELECT * FROM times WHERE race_id = ?");
    $stmt2->bind_param("i", $row['id']);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $rows = $result2->num_rows;
    if($rows > 0) {
      echo '<td style="text-align: center;"><form action="' . $domain . '/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td><td style="text-align: center;"><form action="' . $domain . '/view_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="View Times"></form></td>';
    } else {
      echo '<td colspan="2" style="text-align: center;"><form action="' . $domain . '/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td>';
    }
    echo '</tr>' . PHP_EOL;
    $stmt2->close();
  }
  echo "    </table>" . PHP_EOL;
  $stmt->close();
}
?>
  </body>
</html>