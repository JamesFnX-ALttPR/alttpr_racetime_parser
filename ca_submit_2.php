<?php
include('functions.php');
include('settings.php');
$domain = getRequestURL();
$conn = new mysqli($server,$user,$pass,$db);
if($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}
function validateTime($t) {
	return preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#', $t);
}
$forfeit = 'n';
$raceid = $_POST['raceid'];
$name = $_POST['name'];
$time = $_POST['time'];
if(strtoupper($time) == 'FF') {
	$time='9:59:00';
}
if($time == '9:59:00') {
	$forfeit='y';
}
$igt = $_POST['igt'];
if(strtoupper($igt) == 'FF') {
	$igt = '9:59:00';
}
$cr = $_POST['cr'];
$vod = $_POST['vod'];
if(isset($_POST['time2'])) {
	$time2 = $_POST['time2'];
	if(strtoupper($time2) == 'FF') {
		$time2='9:59:00';
	}
	if($time2 == '9:59:00') {
		$forfeit='y';
	}
}
if(isset($_POST['igt2'])) {
	$igt2 = $_POST['igt2'];
	if(strtoupper($igt2) == 'FF') {
		$igt2 = '9:59:00';
	}
}
if(isset($_POST['cr2'])) {
	$cr2 = $_POST['cr2'];
}
if(isset($_POST['vod2'])) {
	$vod2 = $_POST['vod2'];
}
$comments = $_POST['comments'];
if($forfeit == 'y') {
	$igt=null;
	$igt2=null;
	$cr=null;
	$cr2=null;
}
if(empty($time)) {
	die("Form Broke Somehow");
}
$st = $conn->prepare("SELECT coop FROM custom_seeds WHERE id = ?");
$st->bind_param("i", $raceid);
$st->execute();
$rslt = $st->get_result();
$row = $rslt->fetch_assoc();
$coop = $row['coop'];
$st->close();
if(validateTime($time) == 0) {
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '	<head>' . PHP_EOL;
	echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
	echo '		<title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
	echo '	</head>' . PHP_EOL;
	echo '	<body>' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '		<br><br><hr>' . PHP_EOL;
	echo '		<h1>Submission Failed - Time Not In Correct Format</h1>' . PHP_EOL;
	echo '		<p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
	echo '	</body>' . PHP_EOL;
	echo '</html>';
} elseif($igt != '' && validateTime($igt) == 0) {
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '	<head>' . PHP_EOL;
	echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
	echo '		<title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
	echo '	</head>' . PHP_EOL;
	echo '	<body>' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '		<br><br><hr>' . PHP_EOL;
	echo '		<h1>Submission Failed - In-Game Time Not In Correct Format</h1>' . PHP_EOL;
	echo '		<p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
	echo '	</body>' . PHP_EOL;
	echo '</html>';
} elseif(validateTime($time2) == 0 && $coop == 'y') {
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '	<head>' . PHP_EOL;
	echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
	echo '		<title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
	echo '	</head>' . PHP_EOL;
	echo '	<body>' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '		<br><br><hr>' . PHP_EOL;
	echo '		<h1>Submission Failed - Player 2\'s Time Not In Correct Format</h1>' . PHP_EOL;
	echo '		<p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
	echo '	</body>' . PHP_EOL;
	echo '</html>';
} elseif($igt != '' && validateTime($igt2) == 0 && $coop == 'y') {
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '	<head>' . PHP_EOL;
	echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
	echo '		<title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
	echo '	</head>' . PHP_EOL;
	echo '	<body>' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '		<br><br><hr>' . PHP_EOL;
	echo '		<h1>Submission Failed - Player 2\'s In-Game Time Not In Correct Format</h1>' . PHP_EOL;
	echo '		<p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
	echo '	</body>' . PHP_EOL;
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
		echo '	<head>' . PHP_EOL;
		echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
		echo '		<title>Custom Asyncs - Submission Failed</title>' . PHP_EOL;
		echo '	</head>' . PHP_EOL;
		echo '	<body>' . PHP_EOL;
		echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
		echo '		<br><br><hr>' . PHP_EOL;
		echo '		<h1>Submission Failed - Time Already Submitted By' . $name . '</h1>' . PHP_EOL;
		echo '		<p style="text-align: center;"><form action="' . $domain . '/customasync/submittime" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $raceid . '"><input type="submit" value="Try Again!"></form></p>' . PHP_EOL;
		echo '	</body>' . PHP_EOL;
		echo '</html>';
	} else {
		if($forfeit == 'n') {
			if($igt == '') {
				$igt=null;
			}
			if($time2 == '') {
				$time2=null;
			}
			if($igt2 == '') {
				$igt2=null;
			}
			if($cr == '') {
				$cr=null;
			}
			if($cr2 == '') {
				$cr2=null;
			}
		}
		$stmt = $conn->prepare("INSERT INTO custom_times (seed_id, name, forfeit, realtime, ingametime, cr, comments, vod, realtime2, ingametime2, cr2, vod2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("issssissssis", $raceid, $name, $forfeit, $time, $igt, $cr, $comments, $vod, $time2, $igt2, $cr2, $vod2);
		$stmt->execute();
		$stmt->close();
		echo '<!DOCTYPE html>' . PHP_EOL;
		echo '<html>' . PHP_EOL;
		echo '	<head>' . PHP_EOL;
		echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
		echo '		<title>Custom Asyncs - Submission Accepted</title>' . PHP_EOL;
		echo '		<meta http-equiv="refresh" content="5;URL=' . "'" . $domain . "/customasync/viewtime/" . $raceid . "'" . '" />' . PHP_EOL;
		echo '	</head>' . PHP_EOL;
		echo '	<body>' . PHP_EOL;
		echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
		echo '		<br><br><hr>' . PHP_EOL;
		echo '		<h1>Submission Accepted! Taking You to Race Results</h1>' . PHP_EOL;
		echo '	</body>' . PHP_EOL;
		echo '</html>';
	}
}
?>