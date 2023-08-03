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
$stmt = $conn->prepare("SELECT async_id, seed, mode, hash, coop FROM custom_seeds WHERE id = ?");
$stmt->bind_param("i",$raceid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$asyncid = $row['async_id'];
$seed = $row['seed'];
$mode = $row['mode'];
$hash = $row['hash'];
$parsedHash = hashToImages($hash);
$asynccoop = $row['coop'];
$stmt->close();
$stmt = $conn->prepare("SELECT name, description FROM custom_async WHERE id = ?");
$stmt->bind_param("i", $asyncid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$asyncname = $row['name'];
$asyncdesc = $row['description'];
$asynccoop = $row['coop'];
$stmt->close();
if($asynccoop == 'n') {
	$timeSum = 0;
	$count = 0;
	$stmt = $conn->prepare("SELECT realtime FROM custom_times WHERE seed_id = ? AND forfeit = 'n'");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$count++;
		$timeSum = $timeSum + timeToSeconds($row['realtime']);
	}
	if($count != 0) {
		$averageTime = secondsToTime(round($timeSum / $count));
	} else {
		$averageTime = 'N/A';
	}
	$stmt->close();
	$crSum = 0;
	$crCount = 0;
	$stmt = $conn->prepare("SELECT cr FROM custom_times WHERE cr IS NOT NULL AND seed_id = ? AND forfeit = 'n'");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$crCount++;
		$crSum = $crSum + $row['cr'];
	}
	if($crCount != 0) {
		$averageCR = round($crSum / $crCount);
	} else {
		$averageCR = 'N/A';
	}
	$stmt->close();
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '	<head>' . PHP_EOL;
	echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
	echo '		<title>Custom Async - ' . $asyncname . 'Results</title>' . PHP_EOL;
	echo '	</head>' . PHP_EOL;
	echo '	<body>' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '		<br><br><hr>' . PHP_EOL;
	echo '		<h1>Async Results and Stats</h1>' . PHP_EOL;
	echo '		<p class="header">' . $asyncname . ' - ' . $mode . '<br /><a target="_blank" href="' . $seed . '">' . $seed . '</a> - ' . $parsedHash . '</p>' . PHP_EOL;
	echo '		<p style="text-align: center; font-size: x-large;">Average Time - ' . $averageTime . ' - Average Collection Rate - ' . $averageCR . '</p>' . PHP_EOL;
	echo '		<table class="times" style="width: 90%;">' . PHP_EOL;
	echo '			<tr><th>Name</th><th>Real Time</th><th>In Game Time</th><th>Collection Rate</th><th>Comments</th><th>Link to VOD</th></tr>' . PHP_EOL;
	$stmt = $conn->prepare("SELECT name, realtime, ingametime, cr, comments, vod FROM custom_times WHERE seed_id = ? AND forfeit = 'n' ORDER BY realtime ASC");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		echo '			<tr><td style="text-align: center;">' . $row['name'] . '</td><td style="text-align: center;">' . $row['realtime'] . '</td><td style="text-align: center;">';
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
			echo '</td></tr>' . PHP_EOL;
		} elseif(substr($row['vod'], 0, 4) != 'http') {
			echo $row['vod'] . '</td></tr>' . PHP_EOL;
		} else {
			echo '<a target="_blank" href="' . $row['vod'] . '">Link to VOD</a></td></tr>' . PHP_EOL;
		}
	}
	$stmt->close();
	$stmt = $conn->prepare("SELECT name, comments FROM custom_times WHERE seed_id = ? AND forfeit = 'y' ORDER BY id ASC");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		echo '			<tr><td style="text-align: center;">' . $row['name'] . '</td><td style="text-align: center;">FF</td><td style="text-align: center;">FF</td><td style="text-align: center;">FF</td><td style="text-align: center;">' . $row['comments'] . '</td><td style="text-align: center;">FF</td></tr>' . PHP_EOL;
	}
	$stmt->close();
	echo '		</table>' . PHP_EOL;
	echo '		<br /><hr />' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headercenter"><a href="' . $domain . '/customasync/' . $asyncid . '">Back to ' . $asyncname . ' Seeds</a></span></div>' . PHP_EOL;
	echo '	</body>' . PHP_EOL;
	echo '</html>' . PHP_EOL;
} else {
	$timeSum = 0;
	$count = 0;
	$stmt = $conn->prepare("SELECT realtime FROM custom_times WHERE seed_id = ? AND forfeit = 'n'");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$count++;
		$timeSum = $timeSum + timeToSeconds($row['realtime']);
	}
	$stmt->close();
	$stmt = $conn->prepare("SELECT realtime2 FROM custom_times WHERE seed_id = ? AND forfeit = 'n'");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$count++;
		$timeSum = $timeSum + timeToSeconds($row['realtime2']);
	}
	$stmt->close();
	if($count != 0) {
		$averageTime = secondsToTime(round($timeSum / $count));
	} else {
		$averageTime = 'N/A';
	}
	$crSum = 0;
	$crCount = 0;
	$stmt = $conn->prepare("SELECT cr FROM custom_times WHERE cr IS NOT NULL AND seed_id = ? AND forfeit = 'n'");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$crCount++;
		$crSum = $crSum + $row['cr'];
	}
	$stmt->close();
	$stmt = $conn->prepare("SELECT cr2 FROM custom_times WHERE cr2 IS NOT NULL AND seed_id = ? AND forfeit = 'n'");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$crCount++;
		$crSum = $crSum + $row['cr2'];
	}
	$stmt->close();
	if($crCount != 0) {
		$averageCR = round($crSum / $crCount);
	} else {
		$averageCR = 'N/A';
	}
	echo '<!DOCTYPE html>' . PHP_EOL;
	echo '<html>' . PHP_EOL;
	echo '	<head>' . PHP_EOL;
	echo '		<link rel="stylesheet" href="' . $domain . '/styles.css">' . PHP_EOL;
	echo '		<title>Custom Async - ' . $asyncname . 'Results</title>' . PHP_EOL;
	echo '	</head>' . PHP_EOL;
	echo '	<body>' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
	echo '		<br><br><hr>' . PHP_EOL;
	echo '		<h1>Async Results and Stats</h1>' . PHP_EOL;
	echo '		<p class="header">' . $asyncname . ' - ' . $mode . '<br /><a target="_blank" href="' . $seed . '">' . $seed . '</a> - ' . $parsedHash . '</p>' . PHP_EOL;
	echo '		<p style="text-align: center; font-size: x-large;">Average Time - ' . $averageTime . ' - Average Collection Rate - ' . $averageCR . '</p>' . PHP_EOL;
	echo '		<table class="times" style="width: 90%;">' . PHP_EOL;
	echo '			<tr><td class="submitLabel"></td><th colspan="4"><span class="new">Player 1</span></th><th colspan="4"><span class="new">Player 2</span></th><td class="submitLabel" colspan="4"></td></tr>' . PHP_EOL;
	echo '			<tr><th>Name</th><th>Time</th><th>IGT</th><th>CR</th><th>VOD</th><th>Time</th><th>IGT</th><th>CR</th><th>VOD</th><th>Average Time</th><th>Average IGT</th><th>Combined CR</th></tr>' . PHP_EOL;
	$stmt = $conn->prepare("SELECT name, realtime, ingametime, cr, comments, vod, realtime2, ingametime2, cr2, vod2 FROM custom_times WHERE seed_id = ? AND forfeit = 'n' ORDER BY realtime ASC");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		$teamTotalRT = timeToSeconds($row['realtime']) + timeToSeconds($row['realtime2']);
		$teamAverageRT = secondsToTime(round($teamTotalRT / 2));
		if($row['ingametime'] == NULL) {
			$teamAverageIGT = 'N/A';
		} elseif($row['ingametime2'] == NULL) {
			$teamAverageIGT = 'N/A';
		} else {
			$teamTotalIGT = timeToSeconds($row['ingametime']) + timeToSeconds($row['ingametime2']);
			$teamAverageIGT = secondsToTime(round($teamTotalIGT / 2));
		}
		if($row['cr'] == NULL) {
			$teamCR = 'N/A';
		} elseif($row['cr2'] == NULL) {
			$teamCR = 'N/A';
		} else {
			$teamCR = $row['cr'] + $row['cr2'];
		}
		echo '			<tr><td style="text-align: center;">' . $row['name'] . '</td><td style="text-align: center;">' . $row['realtime'] . '</td><td style="text-align: center;">';
		if($row['ingametime'] == NULL) {
			echo 'N/A';
		} else {
			echo $row['ingametime'];
		}
		echo '</td><td style="text-align: center;">';
		if($row['cr'] == NULL) {
			echo 'N/A';
		} elseif($row['cr'] == '') {
			echo 'N/A';
		} else {
			echo $row['cr'];
		}
		echo '</td><td style="text-align: center;">';
		if($row['vod'] == '') {
			echo '';
		} elseif(substr($row['vod'], 0, 4) != 'http') {
			echo $row['vod'];
		} else {
			echo '<a target="_blank" href="' . $row['vod'] . '">Link to VOD</a>';
		}
		echo '</td><td style="text-align: center;">' . $row['realtime2'] . '</td><td style="text-align: center;">';
			if($row['ingametime2'] == NULL) {
			echo 'N/A';
		} else {
			echo $row['ingametime2'];
		}
		echo '</td><td style="text-align: center;">';
		if($row['cr2'] == NULL) {
			echo 'N/A';
		} elseif($row['cr2'] == '') {
			echo 'N/A';
		} else {
			echo $row['cr2'];
		}
		echo '</td><td style="text-align: center;">';
		if($row['vod2'] == '') {
			echo '';
		} elseif(substr($row['vod2'], 0, 4) != 'http') {
			echo $row['vod2'];
		} else {
			echo '<a target="_blank" href="' . $row['vod2'] . '">Link to VOD</a>';
		}
		echo '</td><td style="text-align: center; font-weight: bold;">' . $teamAverageRT . '</td><td style="text-align: center; font-weight: bold;">' . $teamAverageIGT . '</td><td style="text-align: center; font-weight: bold;">' . $teamCR . '</td></tr>' . PHP_EOL;
		echo '			<tr><th>Comments</th><td colspan="11">' . $row['comments'] . '</td></tr>' . PHP_EOL;
	}
	$stmt->close();
	$stmt = $conn->prepare("SELECT name, comments FROM custom_times WHERE seed_id = ? AND forfeit = 'y' ORDER BY id ASC");
	$stmt->bind_param("i", $raceid);
	$stmt->execute();
	$result=$stmt->get_result();
	while($row = $result->fetch_assoc()) {
		echo '			<tr><td style="text-align: center;">' . $row['name'] . '</td><td style="text-align: center; font-weight: bold;" colspan="4">FF</td><td style="text-align: center; font-weight: bold;" colspan="4">FF</td><td style="text-align: center; font-weight: bold;">N/A</td><td style="text-align: center; font-weight: bold;">N/A</td><td style="text-align: center; font-weight: bold;">N/A</td></tr>' . PHP_EOL;
		echo '			<tr><th>Comments</th><td colspan="11">' . $row['comments'] . '</td></tr>' . PHP_EOL;
	}
	$stmt->close();
	echo '		</table>' . PHP_EOL;
	echo '		<br /><hr />' . PHP_EOL;
	echo '		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headercenter"><a href="' . $domain . '/customasync/' . $asyncid . '">Back to ' . $asyncname . ' Seeds</a></span></div>' . PHP_EOL;
	echo '	</body>' . PHP_EOL;
	echo '</html>' . PHP_EOL;
}
?>