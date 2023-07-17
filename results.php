<!DOCTYPE html>
<html>
  <head>
    <title>RaceTime Race Results</title>
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
$mode = $_POST['gamemode'];
$page = $_POST['page'];
$exclude = $_POST['exclude'];
if(empty($page)) {
  $pageint = 1;
} else {
  $pageint = intval($page);
}
$offset = 20 * ($pageint - 1);
$firstrecord = $offset + 1;
if(empty($mode)) {
  echo "<p>No Race Found Somehow?</p>" . PHP_EOL;
} else {
  if(empty($exclude)) {
    $stmt = $conn->prepare("SELECT id, date, url, seed, hash, description, players FROM races WHERE mode LIKE ? ORDER BY date DESC LIMIT 20 OFFSET ?");
    $stmt->bind_param("si", $mode, $offset);
    $stmt->execute();
  } else {
    $stmt = $conn->prepare("SELECT id, date, url, seed, hash, description, players FROM races WHERE mode LIKE ? AND id NOT IN (SELECT race_id FROM times WHERE name LIKE ?) ORDER BY date DESC LIMIT 20 OFFSET ?;");
    $stmt->bind_param("ssi", $mode, $exclude, $offset);
    $stmt->execute();
  }
  $result = $stmt->get_result();
  $rows = $result->num_rows;
  $rowsint = intval($rows);
  $lastrecord = $firstrecord + $rowsint - 1;
  echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
  echo '    <br><br><hr>' . PHP_EOL;
  echo '    <div style="width: 50%; text-align: center; margin: auto;" class="inline"><p class="excludetext">Exclude a Racer?<br><form action="./results.php" method="post"><select name="exclude"><option value="">(None)</option>' . PHP_EOL;
  $stmtexcl = $conn->prepare("SELECT DISTINCT name FROM times WHERE race_id IN (SELECT id FROM races WHERE mode LIKE ?) ORDER BY name ASC");
  $stmtexcl->bind_param("s", $mode);
  $stmtexcl->execute();
  $resultexcl = $stmtexcl->get_result();
  while($row = $resultexcl->fetch_assoc()) {
    echo '    <option value="' . htmlentities($row['name']) . '">' . htmlentities($row['name']) . '</option>' . PHP_EOL;
  }
  $stmtexcl->close();
  echo '    </select><input type="hidden" id="gamemode" name="gamemode" value="' . $mode . '"><input type="hidden" id="page" name="page" value="' . $page . '"><input type="submit" value="Exclude Racer"></form></p></div>' . PHP_EOL;
  echo '    <table style="width: 90%;">' . PHP_EOL;
  if(empty($exclude)) {
    echo '      <caption>' . htmlentities($mode) . ' Seeds ' . $firstrecord . '-' . $lastrecord . '</caption>' . PHP_EOL;
  } else {
    echo '      <caption>' . htmlentities($mode) . ' Seeds ' . $firstrecord . '-' . $lastrecord . '<br>Excluding ' . $exclude . '</caption>' . PHP_EOL;
  }
  echo '      <tr><th width="85 px">Date</th><th>RaceTime Room</th><th width="75 px">Seed Link</th><th width="145 px">Hash</th><th>Description</th><th>Permalink</th><th>Players</th><th colspan="2">Submit/View Times</th></tr>' . PHP_EOL;
  while($row = $result->fetch_assoc()) {
    if(strlen($row['description']) > 75) {
      $description = substr($row['description'], 0, 72) . '...';
    } else {
      $description = $row['description'];
    }
    echo '      <tr><td style="text-align: center;">' . htmlentities($row['date']) . '</td><td><a href="https://racetime.gg' . htmlentities($row['url']) . '" target="_blank" rel="noreferrer noopener">' . str_replace('/alttpr/','',$row['url']) . '</a></td><td style="text-align: center;"><a href="' . htmlentities($row['seed']) . '" target="_blank" rel="noreferrer noopener">Seed Link</a></td><td>' . hashToImages($row['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;"><a href="' . $domain . '/races/' . $row['id'] . '" target="_blank" rel="noreferrer noopener">Permalink</a></td><td style="text-align: center;">' . $row['players'] . '</td><td style="text-align: center;"><form action="' . $domain . '/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td><td style="text-align: center;"><form action="' . $domain . '/view_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="View Times"></form></td></tr>' . PHP_EOL;
  }
  echo "    </table><br>" . PHP_EOL;
  $nextpage = $pageint + 1;
  if($pageint > 1) {
    $lastpage = $pageint - 1;
    echo '    <div style="width: 90%; margin: auto;"><form method="post" action="' . $domain . '/results.php" class="inline"><input type="hidden" id="gamemode" name="gamemode" value="' . $mode . '"><input type="hidden" id="exclude" name="exclude" value="' . $exclude . '"><input type="hidden" id="page" name="page" value="' . $lastpage . '"><button type="submit" class="link-button-2" style="float: left;">Last Page</button></form>';
  } else {
    echo '    <div style="width: 90%; margin: auto;">';
  }
  if($lastrecord - $firstrecord == 19) {
    echo '<form method="post" action="' . $domain . '/results.php" class="inline"><input type="hidden" id="gamemode" name="gamemode" value="' . $mode . '"><input type="hidden" id="exclude" name="exclude" value="' . $exclude . '"><input type="hidden" id="page" name="page" value="' . $nextpage . '"><button type="submit" class="link-button-2" style="float: right;">Next Page</button></form></div>' . PHP_EOL;
  } else {
    echo '</div>' . PHP_EOL;
  }
  $stmt->close();
}
?>
  </body>
</html>
