<?php
include('settings.php');
include('functions.php');
$domain = getRequestURL();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Custom Asyncs</title>
		<link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
	</head>
	<body>
<?php
if(!isset($_GET['id'])) {
	die('No Race ID provided!');
} else {
	$id = $_GET['id'];
}
$conn = new mysqli($server,$userro,$passro,$db);
if($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}
$st1 = $conn->prepare("SELECT name, description FROM custom_async WHERE id = ?");
$st1->bind_param("i", $id);
$st1->execute();
$rslt1 = $st1->get_result();
while($rw1 = $rslt1->fetch_assoc()) {
	$name = $rw1['name'];
	$description = $rw1['description'];
}
echo '		<div class="topline"><a href="' . $domain . '">Home</a><a href="' . $domain. '/faq">FAQ</a><a href="' . $domain . '/featured">Featured Modes</a><a href="' .$domain . '/asyncs">Custom Asyncs</a><a href="' . $domain . '/discord" target="_blank">Discord</a></div>' . PHP_EOL;
echo '		<br><br><hr>' . PHP_EOL;
echo '		<h1>Custom Asyncs for Tournaments and Communities</h1>' . PHP_EOL;
echo '		<h2 style="text-align: center; font-family: \'Hylia Serif Beta\'; color: white">' . $name . '</h2>'. PHP_EOL;
echo '		<p style="text-align: center;">' . $description . '</p><hr>' . PHP_EOL;
echo '		<table style="width: 90%;">' . PHP_EOL;
$st = $conn->prepare("SELECT id, seed, mode, hash, coop FROM custom_seeds WHERE async_id = ?");
$st->bind_param("i", $id);
$st->execute();
$rslt = $st->get_result();
echo '			<tr><th>Seed</th><th>Mode</th><th>Hash</th><th>Players</th><th>Permalink</th><th colspan="2">View/Submit Times</th></tr>' . PHP_EOL;
while($rw = $rslt->fetch_assoc()) {
	$st2 = $conn->prepare("SELECT id FROM custom_times WHERE seed_id = ?");
	$st2->bind_param("i", $rw['id']);
	$st2->execute();
	$rslt2 = $st2->get_result();
	$players = $rslt2->num_rows;
	$st2->close();
	echo '			<tr><td style="text-align: center;"><a target="_blank" href="' . htmlentities($rw['seed']) . '">Seed Link</a></td><td style="text-align: center;">';
	if($rw['coop'] == 'y'){
		echo 'Co-Op - ';
	}
	echo $rw['mode'] . '</td><td style="text-align:center;">' . hashToImages($rw['hash']) . '</td><td style="text-align: center;">' . $players . '</td><td style="text-align: center;"><a target="_blank" href="' . $domain . '/customasync/submittime/' . $rw['id'] . '">Permalink</a></td><td style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $rw['id'] . '"><input type="submit" value="Submit Time"></form></td><td style="text-align: center;"><form action="' . $domain . '/ca_viewtimes.php" method="get"><input type="hidden" id="race_id" name="race_id" value="' . $rw['id'] . '"><input type="submit" value="View Times"></form></td></tr>' . PHP_EOL;
}
echo "		</table>" . PHP_EOL;
$st->close();
?>
	</body>
</html>