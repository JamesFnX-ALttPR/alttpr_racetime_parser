<!DOCTYPE html>
<html>
  <head>
    <title>RaceTime Player Search Results</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
include('settings.php');
include('functions.php');
$domain = getRequestURL();
$conn = new mysqli($server,$userro,$passro,$db);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$name = $_POST['racer'];
$page = $_POST['page'];
if(empty($page)) {
  $pageint = 1;
} else {
  $pageint = intval($page);
}
$offset = 20 * ($pageint - 1);
$firstrecord = $offset + 1;
if(empty($name)) {
  echo "<p>No Race Found Somehow?</p>" . PHP_EOL;
  die();
} else {
  $st = $conn->prepare("SELECT race_id FROM times WHERE name LIKE ? ORDER BY race_id DESC LIMIT 20 OFFSET ?");
  $st->bind_param("si", $name, $offset);
  $st->execute();
  $rslt = $st->get_result();
  $rws = $rslt->num_rows;
  $rwsint = intval($rws);
  $lastrecord = $firstrecord + $rwsint - 1;
  echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
  echo '    <br><br><hr>' . PHP_EOL;
  echo '    <table style="width: 90%;">' . PHP_EOL;
  echo '    <caption>Races Completed By ' . htmlentities($name) . ' ' . $firstrecord . '-' . $lastrecord . '</caption>' . PHP_EOL;
  echo '      <tr><th width="85 px">Date</th><th>RaceTime Room</th><th width="75 px">Seed Link</th><th>Mode</th><th width="145 px">Hash</th><th>Description</th><th>Permalink</th><th>Players</th><th colspan="2">Submit/View Times</th></tr>' . PHP_EOL;
  while($rw = $rslt->fetch_assoc()) {
    $id = $rw['race_id'];
    $stmt = $conn->prepare("SELECT id, date, url, mode, seed, hash, description, players FROM races WHERE id = ? ORDER BY date DESC");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
      if(strlen($row['description']) > 75) {
        $description = substr($row['description'], 0, 72) . '...';
      } else {
        $description = $row['description'];
      }
      echo '      <tr><td style="text-align: center;">' . htmlentities($row['date']) . '</td><td><a href="https://racetime.gg' . htmlentities($row['url']) . '" target="_blank" rel="noreferrer noopener">' . str_replace('/alttpr/','',$row['url']) . '</a></td><td style="text-align: center;"><a href="' . htmlentities($row['seed']) . '" target="_blank" rel="noreferrer noopener">Seed Link</a></td><td>' . $row['mode'] . '</td><td>' . hashToImages($row['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;"><a href="' . $domain . '/races/' . $row['id'] . '" target="_blank" rel="noreferrer noopener">Permalink</a></td><td style="text-align: center;">' . $row['players'] . '</td><td style="text-align: center;"><form action="' . $domain . '/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td><td style="text-align: center;"><form action="' . $domain . '/view_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="View Times"></form></td></tr>' . PHP_EOL;
    }
    $stmt->close();
  }
  echo "    </table><br>" . PHP_EOL;
  $nextpage = $pageint + 1;
  if($pageint > 1) {
    $lastpage = $pageint - 1;
    echo '    <div style="width: 90%; margin: auto;"><form method="post" action="' . $domain . '/racerresults.php" class="inline"><input type="hidden" id="racer" name="racer" value="' . $name . '"><input type="hidden" id="page" name="page" value="' . $lastpage . '"><button type="submit" class="link-button-2" style="float: left;">Last Page</button></form>';
  } else {
    echo '    <div style="width: 90%; margin: auto;">';
  }
  if($lastrecord - $firstrecord == 19) {
    echo '<form method="post" action="' . $domain . '/racerresults.php" class="inline"><input type="hidden" id="racer" name="racer" value="' . $name . '"><input type="hidden" id="page" name="page" value="' . $nextpage . '"><button type="submit" class="link-button-2" style="float: right;">Next Page</button></form></div>' . PHP_EOL;
  } else {
    echo '</div>' . PHP_EOL;
  }
  $st->close();
}
?>
  </body>
</html>
