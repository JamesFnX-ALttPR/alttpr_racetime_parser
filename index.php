<?php
include('settings.php');
include('functions.php');
$conn = new mysqli($server,$user,$pass,$db);
if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}
$domain = getRequestURL();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
		<title>RaceTime.GG Async Search/Submission Tool by JamesFnX</title>
	</head>
	<body>
		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><?php echo '<a href="' . $domain; ?>/faq">FAQ</a></span><span class="headercenter"><?php echo '<a href="' . $domain; ?>/featured">Featured Modes</a></span><span class="headerright"><?php echo '<a href="' . $domain; ?>/discord" target="_blank">Discord</a></span></div>
		<br /><br /><hr />
		<h1>RaceTime Race Search and Async Submission</h1>
		<p>This tool looks up races from <a target="_blank" href="https://racetime.gg">RaceTime.GG</a> and sorts them by mode, giving you links to the seed without seeing the RT.GG page and getting spoiled on times.<br />
		This tool is very much still in development.<br />
		<strong>UPDATED 8/3/23</strong> - <a href="<?= $domain ?>/asyncs">Custom Asyncs</a> are live! Thanks to Tabbycat54 and the community for testing these out! If you have issues, please reach out to me on the <a href="<?= $domain ?>/discord" target="_blank">Discord</a>.<br />
		<strong>UPDATED 7/14/23</strong> - <?php echo '<a href="' . $domain; ?>/featured">Featured Modes</a> moved to their own page. Now featuring Crosskeys 100% Locations and Casual Boots.<br />
		<strong>UPDATED 7/7/23</strong> - Fixed a bug preventing times from new races from being entered automatically.<br />
		<strong>UPDATED 7/4/23</strong> - You can now add comments to your time submissions.<br />
		<table style="text-align: center;">
			<tr>
				<th style="font-family: 'Return of Ganon'; font-size: large; font-weight: normal;">Search by Mode</th>
				<th style="font-family: 'Return of Ganon'; font-size: large; font-weight: normal;">Search by Racer</th>
			</tr>
			<tr>
				<td style="border: 0px; background-color: rgb(0, 48, 0);">
					<?php echo '<form action="' . $domain; ?>/results.php" method="post">
						<select name="gamemode">
<?php
$stmt = $conn->prepare("SELECT DISTINCT mode FROM races ORDER BY mode ASC");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
	echo '							<option value="' . htmlentities($row['mode']) . '">' . htmlentities($row['mode']) . '</option>' . PHP_EOL;
}
$stmt->close();
?>
						</select>
						<input type="hidden" id="page" name="page" value="1">
						<input type="submit" value="Search Mode">
					</form>
				</td>
				<td style="border: 0px; background-color: rgb(0, 48, 0);">
					<?php echo '<form action="' . $domain; ?>/racerresults.php" method="post">
						<select name="racer">
<?php
$stmt = $conn->prepare("SELECT DISTINCT name FROM times ORDER BY name ASC");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
	echo '							<option value="' . htmlentities($row['name']) . '">' . htmlentities($row['name']) . '</option>' . PHP_EOL;
}
$stmt->close();
?>
						</select>
						<input type="submit" value="Search Racer">
					</form>
				</td>
			</tr>
		</table>
		<hr />
		<div style="text-align: center;"><input type="button" value="Latest Asynced Races - Click to View" id="showasynced" onclick="toggleAsynced(this)" class="index-button"></div><br />
		<div style="display:none;" id="asyncedraces">
			<table>
				<tr><th width="85 px">Date</th><th>Mode</th><th>RaceTime Room</th><th>Seed Link</th><th width="145 px">Hash</th><th>Description</th><th>Players</th><th>Permalink</th><th colspan="2">Submit/View Times</th></tr>
<?php
$stmt = $conn->prepare("SELECT DISTINCT race_id FROM times WHERE from_racetime = 'n' ORDER BY id DESC LIMIT 10");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
	$id = $row['race_id'];
	$stmt2 = $conn->prepare("SELECT id, date, url, mode, seed, hash, description, players FROM races WHERE id = ?");
	$stmt2->bind_param("i",$id);
	$stmt2->execute();
	$result2 = $stmt2->get_result();
	while($row2 = $result2->fetch_assoc()) {
		if(strlen($row2['description']) > 75) {
			$description = substr($row2['description'], 0, 72) . '...';
		} else {
			$description = $row2['description'];
		}
		echo '				<tr><td style="text-align: center;">' . $row2['date'] . '</td><td style="text-align: center;">' . $row2['mode'] . '</td><td><a target="_blank" href="https://racetime.gg' . $row2['url'] . '">' . $row2['url'] . '</a></td><td><a target="_blank" href="' . $row2['seed'] .'">Download Seed</a></td><td>' . hashToImages($row2['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;">' . $row2['players'] . '</td><td style="text-align: center;"><a href="' . $domain . '/races/' . $row2['id'] . '" target=_blank" rel="noreferrer noopener">Permalink</a></td><td><form action="' . $domain . '/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row2['id'] . '"><input type="submit" value="Input Time"></form></td><td><form method="post" action="' . $domain . '/view_time.php"><input type="hidden" id="race_id" name="race_id" value="' . $row2['id'] . '"><input type="submit" value="View Times"></form></td></tr>' . PHP_EOL;
	}
	$stmt2->close();
}
$stmt->close();
?>
			</table>
		</div>
		<hr />
		<div style="text-align: center;"><input type="button" value="Latest Added Races - Click to View" id="showadded" onclick="toggleAdded(this)" class="index-button"></div><br />
		<div style="display:none;" id="addedraces">
			<table>
				<tr><th width="85 px">Date</th><th>Mode</th><th>RaceTime Room</th><th>Seed Link</th><th width="145 px">Hash</th><th>Description</th><th>Players</th><th>Permalink</th><th colspan="2">Submit/View Times</th></tr>
<?php
$stmt = $conn->prepare("SELECT id, date, url, mode, seed, hash, description, players FROM races ORDER BY date DESC LIMIT 10");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
	if(strlen($row['description']) > 75) {
		$description = substr($row['description'], 0, 72) . '...';
	} else {
		$description = $row['description'];
	}
	echo '				<tr><td style="text-align: center;">' . $row['date'] . '</td><td style="text-align: center;">' . $row['mode'] . '</td><td><a target="_blank" href="https://racetime.gg' . $row['url'] . '">' . $row['url'] . '</a></td><td><a target="_blank" href="' . $row['seed'] .'">Download Seed</a></td><td>' . hashToImages($row['hash']) . '</td><td>' . $description . '</td><td style="text-align: center;">' . $row['players'] . '</td><td style="text-align: center;"><a href="' . $domain . '/races/' . $row['id'] . '" target=_blank" rel="noreferrer noopener">Permalink</a></td><td><form action="' . $domain . '/submit_time.php" method="post"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="Input Time"></form></td><td><form method="post" action="' . $domain . '/view_time.php"><input type="hidden" id="race_id" name="race_id" value="' . $row['id'] . '"><input type="submit" value="View Times"></form></td></tr>' . PHP_EOL;
}
$stmt->close();
?>
			</table>
		</div>
		<hr />
		<div style="text-align: center;"><input type="button" value="Most Raced Modes This Month - Click to View" id="showmost" onclick="toggleMost(this)" class="index-button"></div><br />
		<div style="display: none;" id="mostraced">
			<table style="width: 350px;">
				<tr><th>Mode</th><th>Races</th></tr>
<?php
$stmt = $conn->prepare("SELECT DISTINCT mode, COUNT(mode) AS total FROM races WHERE date BETWEEN NOW() - INTERVAL 30 DAY AND NOW() GROUP BY mode HAVING COUNT(mode) > 1 ORDER BY total DESC");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
	echo '					<tr><td><form method="post" action="' . $domain . '/results.php" class="inline"><button type="submit" name="gamemode" value="' . $row['mode'] . '" class="link-button">' . $row['mode'] . '</button></form></td><td style="text-align: right;">' . $row['total'] . '</td></tr>' . PHP_EOL;}
$stmt->close();
?>
			</table>
		</div>
	</body>
	<script>
	function toggleAsynced(ele) {
		var vis = document.getElementById('asyncedraces');
		if (vis.style.display == 'block') {
			vis.style.display = 'none';
			document.getElementById(ele.id).value = "Latest Asynced Races - Click to View";
		}
		else {
			vis.style.display = 'block';
			document.getElementById(ele.id).value = "Latest Asynced Races - Click to Hide";
		}
	}
	</script>
	<script>
	function toggleAdded(ele) {
		var vis = document.getElementById('addedraces');
		if (vis.style.display == 'block') {
			vis.style.display = 'none';
			document.getElementById(ele.id).value = "Latest Added Races - Click to View";
		}
		else {
			vis.style.display = 'block';
			document.getElementById(ele.id).value = "Latest Added Races - Click to Hide";
		}
	}
	</script>
	<script>
	function toggleMost(ele) {
		var vis = document.getElementById('mostraced');
		if (vis.style.display == 'block') {
			vis.style.display = 'none';
			document.getElementById(ele.id).value = "Most Raced Modes This Month - Click to View";
		}
		else {
			vis.style.display = 'block';
			document.getElementById(ele.id).value = "Most Raced Modes This Month - Click to Hide";
		}
	}
	</script>
</html>
