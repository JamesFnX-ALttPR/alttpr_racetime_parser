<?php
include('functions.php');
include('settings.php');
$domain = getRequestURL();
$conn = new mysqli($server,$user,$pass,$dbdev);
if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo $domain; ?>styles.css">
<?php
function validateTime($t) {
  return preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#', $t);
}
$raceid = $_POST['raceid'];
$name = $_POST['name'];
$time = $_POST['time'];
$igt = $_POST['igt'];
$cr = $_POST['cr'];
$comments = $_POST['comments'];
$vod = $_POST['vod'];
if(empty($time)) {
    die("Form Broke Somehow");
}
if(validateTime($time) == 0) {
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '  <head>' . PHP_EOL;
	echo '    <link rel="stylesheet" href="' . $domain . 'styles.css">' . PHP_EOL;
	echo '    <title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
	echo '  </head>' . PHP_EOL;
	echo '  <body>' . PHP_EOL;
	echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '    <br><br><hr>' . PHP_EOL;
	echo '    <h1>Submission Failed - Time Not In Correct Format</h1>' . PHP_EOL;
	echo '    <p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
	echo '  </body>' . PHP_EOL
	echo '</html>';
} elseif(validateTime($igt) == 0) {
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '  <head>' . PHP_EOL;
	echo '    <link rel="stylesheet" href="' . $domain . 'styles.css">' . PHP_EOL;
	echo '    <title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
	echo '  </head>' . PHP_EOL;
	echo '  <body>' . PHP_EOL;
	echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '    <br><br><hr>' . PHP_EOL;
	echo '    <h1>Submission Failed - In-Game Time Not In Correct Format</h1>' . PHP_EOL;
	echo '    <p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
	echo '  </body>' . PHP_EOL
	echo '</html>';
} else {
	$stmt = $conn->prepare("SELECT * FROM custom_times WHERE seed_id = ? AND name = ?");
	$stmt->bind_param("is", $raceid, $name);
	$stmt->execute();
	$result = $stmt->get_result();
	$rows = $result->num_rows;
	$stmt->close();
    if($rows > 0) {
		echo '<!DOCTYPE html>' . PHP_EOL;
		echo '<html>' . PHP_EOL;
		echo '  <head>' . PHP_EOL;
		echo '    <link rel="stylesheet" href="' . $domain . 'styles.css">' . PHP_EOL;
		echo '    <title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
		echo '  </head>' . PHP_EOL;
		echo '  <body>' . PHP_EOL;
		echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
		echo '    <br><br><hr>' . PHP_EOL;
		echo '    <h1>Submission Failed - Time Already Submitted By' . $name . '</h1>' . PHP_EOL;
		echo '    <p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
		echo '  </body>' . PHP_EOL
		echo '</html>';
	} else {
		$stmt = $conn->prepare("INSERT INTO custom_times (seed_id, name, realtime, ingametime, cr, comments, vod) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssiss", $raceid, $name, $time, $igt, $cr, $comments, $vod);
		$stmt->execute();
		$stmt->close();
		echo '<!DOCTYPE html>' . PHP_EOL;
		echo '<html>' . PHP_EOL;
		echo '  <head>' . PHP_EOL;
		echo '    <link rel="stylesheet" href="' . $domain . 'styles.css">' . PHP_EOL;
		echo '    <title>Custom Asyncs - Submission Accepted</title>' . PHP_EOL;
		echo '    <meta http-equiv="refresh" content="5;URL=' . "'" . $domain . "/customasync/viewtime/" . $raceid . "'" . '" />' . PHP_EOL;
		echo '  </head>' . PHP_EOL;
		echo '  <body>' . PHP_EOL;
		echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
		echo '    <br><br><hr>' . PHP_EOL;
		echo '    <h1>Submission Accepted! Taking You to Race Results</h1>' . PHP_EOL;
		echo '  </body>' . PHP_EOL;
		echo '</html>'
	}
}
?>
