<!DOCTYPE html>
<html>
  <head>
    <title>RaceTime Comment Moderation</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
include('settings.php');
include('functions.php');
$conn = new mysqli($server,$userro,$passro,$db);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
if(empty($_POST['page'])) {
  $pageint = 1;
} else {
  $pageint = intval($_POST['page']);
}
$offset = 50 * ($pageint - 1);
$firstrecord = $offset + 1;
$stmt = $conn->prepare("SELECT id, race_id, name, comments FROM times WHERE comments <> '' AND from_racetime = 'n' ORDER BY id DESC LIMIT 50 OFFSET ?");
$stmt->bind_param("i", $offset);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->num_rows;
$rowsint = intval($rows);
$lastrecord = $firstrecord + $rowsint - 1;
echo '    <p class="return"><a href="./index.php">Return To Search</a></p>'. PHP_EOL;
echo '    <table style="width: 90%;">' . PHP_EOL;
echo '      <caption>Comment Moderation</caption>' . PHP_EOL;
echo '      <tr><th>Name</th><th>Comment</th><th>Permalink</th><th style="width: 150px;"></th></tr>' . PHP_EOL;
while($row = $result->fetch_assoc()) {
  echo '      <tr><td style="text-align: center;">' . htmlentities($row['name']) . '</td><td style="text-align: center;">' . htmlentities($row['comments']) . '</td><td style="text-align: center;"><a target="_blank" href="https://projects.thecleanupstep.com/races/' . $row['race_id'] . '">Permalink</td><td style="text-align: center;"><form action="./drop_comment.php" method="post"><input type="hidden" id="commentid" name="commentid" value="' . $row['id'] . '"><input type="submit" value="Delete Comment"></form></td></tr>' . PHP_EOL;
}
echo "    </table><br>" . PHP_EOL;
$nextpage = $pageint + 1;
if($pageint > 1) {
  $lastpage = $pageint - 1;
  echo '    <div style="width: 90%; margin: auto;"><form method="post" action="./mod_comments.php" class="inline"><input type="hidden" id="gamemode" name="gamemode" value="' . $mode . '"><input type="hidden" id="exclude" name="exclude" value="' . $exclude . '"><input type="hidden" id="page" name="page" value="' . $lastpage . '"><button type="submit" class="link-button-2" style="float: left;">Last Page</button></form>';
} else {
  echo '    <div style="width: 90%; margin: auto;">';
}
if($lastrecord - $firstrecord == 49) {
  echo '<form method="post" action="./mod_comments.php" class="inline"><input type="hidden" id="gamemode" name="gamemode" value="' . $mode . '"><input type="hidden" id="exclude" name="exclude" value="' . $exclude . '"><input type="hidden" id="page" name="page" value="' . $nextpage . '"><button type="submit" class="link-button-2" style="float: right;">Next Page</button></form></div>' . PHP_EOL;
} else {
  echo '</div>' . PHP_EOL;
}
$stmt->close();
?>
  </body>
</html>
