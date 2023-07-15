<?php
include('settings.php');
include('functions.php');
$conn = new mysqli($server,$userro,$passro,$db);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$domain = getRequestURL();
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" <?php echo 'href="' . $domain; ?>/styles.css">
  <title>RaceTime.GG Async Search/Submission Tool by JamesFnX - Featured Races</title>
  </head>
  <body>
<?php
function queryFromFeatured($a) {
        $r = '';
        foreach($a as $str) {
                $r = $r . "mode = '" . $str . "' OR ";
        }
        $r = substr($r, 0, -4);
        return $r;
}
$page = $_GET['page'];
if(empty($page)) {
  $pageint = 1;
} else {
  $pageint = intval($page);
}
$offset = 20 * ($pageint - 1);
$firstrecord = $offset + 1;
$query = "SELECT id, date, url, seed, hash, description, players FROM races WHERE " . queryFromFeatured($featured) . " ORDER BY date DESC LIMIT 20 OFFSET ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $offset);
$stmt->execute();
$result = $stmt->get_result();
$rows = $result->num_rows;
$rowsint = intval($rows);
$lastrecord = $firstrecord + $rowsint - 1;
echo '    <div style="width: 50%; margin-left: auto; margin-right: auto;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
echo '    <br><br><hr>' . PHP_EOL;
echo '    <table style="width: 90%;">' . PHP_EOL;
echo '      <caption>Featured Modes ';
foreach($featured as $str) {
        echo '- ' . $str . ' ';
}
echo $firstrecord . '-' . $lastrecord . '</caption>' . PHP_EOL;
echo '      <tr><th width="85 px">Date</th><th>RaceTime Room</th><th width="75 px">Seed Link</th><th width="145 px">Hash</th><th>Description</th><th>Permalink</th><th>Players</th><th colspan="2">Submit/View Times</th></tr>' . PHP_EOL;
while($row = $result->fetch_assoc()) {
        $raceid = $row['id'];
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
        echo '    <div style="width: 90%; margin: auto;"><a href="' . $domain . '/featured/' . $lastpage . '" class="link-button-2" style="float: left;">Last Page</a>';
} else {
        echo '    <div style="width: 90%; margin: auto;">';
}
if($lastrecord - $firstrecord == 19) {
        echo '<a href="' . $domain . '/featured/' . $nextpage . '" class="link-button-2" style="float: right;">Next Page</a></div>' . PHP_EOL;
} else {
        echo '</div>' . PHP_EOL;
}
$stmt->close();
?>
  </body>
</html>
