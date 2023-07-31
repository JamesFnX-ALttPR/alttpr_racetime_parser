<?php
include('settings.php');
include('functions.php');
$domain = getRequestURL();
$conn = new mysqli($server,$userro,$passro,$dbdev);
if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
}
$raceid = $_GET['race_id'];
if(empty($raceid)) {
        die("Something Bad Happened");
}
$stmt = $conn->prepare("SELECT async_id, seed, mode, hash FROM custom_seeds WHERE id = ?");
$stmt->bind_param("i",$raceid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$asyncid = $row['async_id'];
$seed = $row['seed'];
$mode = $row['mode'];
$hash = $row['hash'];
$parsedHash = hashToImages($hash);
$stmt->close();
$stmt = $conn->prepare("SELECT name, description FROM custom_async WHERE id = ?");
$stmt->bind_param("i", $asyncid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$asyncname = $row['name'];
$asyncdesc = $row['description'];
$stmt->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
    <title>Custom Async - <?= $asyncname ?> Results</title>
  </head>
  <body>
<?php
  echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
  echo '    <br><br><hr>' . PHP_EOL;
?>
    <h1>Async Results and Stats</h1>
        <p class="header"><?= $asyncname ?> - <?= $mode ?><br /><a target="_blank" href=<?php echo '"' . $seed; ?>"><?= $seed ?></a> - <?= $parsedHash ?></p>
    <table class="times" style="width: 90%;">
      <tr><th>Name</th><th>Real Time</th><th>In Game Time</th><th>Collection Rate</th><th>Comments</th><th>Link to VOD</th></tr>
<?php
$stmt = $conn->prepare("SELECT name, realtime, ingametime, cr, comments, vod FROM custom_times WHERE seed_id = ? AND forfeit = 'n' ORDER BY realtime ASC");
$stmt->bind_param("i", $raceid);
$stmt->execute();
$result=$stmt->get_result();
while($row = $result->fetch_assoc()) {
        echo '      <tr><td style="text-align: center;">' . $row['name'] . '</td><td style="text-align: center;">' . $row['realtime'] . '</td><td style="text-align: center;">';
        if($row['ingametime'] == null) {
                echo 'N/A';
        } else {
                echo $row['ingametime'];
        }
        echo '</td><td style="text-align: center;">';
        if($row['cr'] == '') {
                echo 'N/A';
        } else {
                echo $row['cr'];
        }
        echo '</td><td style="text-align: center;">' . $row['comments'] . '</td><td style="text-align: center;">';
        if($row['vod'] == '') {
                echo '</td></tr>';
        } elseif(substr($row['vod'], 0, 4) != 'http') {
                echo $row['vod'] . '</td></tr>';
        } else {
                echo '<a target="_blank" href="' . $row['vod'] . '">Link to VOD</a></td></tr>';
        }
}
$stmt->close();
$stmt = $conn->prepare("SELECT name, comments FROM custom_times WHERE seed_id = ? AND forfeit = 'y' ORDER BY id ASC");
$stmt->bind_param("i", $raceid);
$stmt->execute();
$result=$stmt->get_result();
while($row = $result->fetch_assoc()) {
        echo '      <tr><td style="text-align: center;">' . $row['name'] . '</td><td style="text-align: center;">FF</td><td style="text-align: center;">FF</td><td style="text-align: center;">FF</td><td style="text-align: center;">' . $row['comments'] . '</td><td style="text-align: center;">FF</td></tr>';
}
$stmt->close();
?>
    </table>
  </body>
</html>
