<?php
include('settings.php');
include('functions.php');
$domain = getRequestURL();
$conn = new mysqli($server,$user,$pass,$dbdev);
if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}
if(isset($_POST['name'])) {
	$name = $_POST['name'];
}
if(isset($_POST['description'])) {
	$description = $_POST['description'];
} else {
	$description = '';
}
$seed = array();
$mode = array();
$hash = array();
if($_POST['seed1'] != '') {
	$seed[] = $_POST['seed1'];
	if(isset($_POST['mode1'])) {
		$mode[] = $_POST['mode1'];
	} else {
		$mode[] = '';
	}
	$hash_1_a = $_POST['hash1a'];
	$hash_1_b = $_POST['hash1b'];
	$hash_1_c = $_POST['hash1c'];
	$hash_1_d = $_POST['hash1d'];
	$hash_1_e = $_POST['hash1e'];
	$formedhash = '(' . $hash_1_a . '/' . $hash_1_b . '/' . $hash_1_c . '/' . $hash_1_d . '/' . $hash_1_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed2'] != '') {
	$seed[] = $_POST['seed2'];
	if(isset($_POST['mode2'])) {
		$mode[] = $_POST['mode2'];
	} else {
		$mode[] = '';
	}
	$hash_2_a = $_POST['hash2a'];
	$hash_2_b = $_POST['hash2b'];
	$hash_2_c = $_POST['hash2c'];
	$hash_2_d = $_POST['hash2d'];
	$hash_2_e = $_POST['hash2e'];
	$formedhash = '(' . $hash_2_a . '/' . $hash_2_b . '/' . $hash_2_c . '/' . $hash_2_d . '/' . $hash_2_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed3'] != '') {
	$seed[] = $_POST['seed3'];
	if(isset($_POST['mode3'])) {
		$mode[] = $_POST['mode3'];
	} else {
		$mode[] = '';
	}
	$hash_3_a = $_POST['hash3a'];
	$hash_3_b = $_POST['hash3b'];
	$hash_3_c = $_POST['hash3c'];
	$hash_3_d = $_POST['hash3d'];
	$hash_3_e = $_POST['hash3e'];
	$formedhash = '(' . $hash_3_a . '/' . $hash_3_b . '/' . $hash_3_c . '/' . $hash_3_d . '/' . $hash_3_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed4'] != '') {
	$seed[] = $_POST['seed4'];
	if(isset($_POST['mode4'])) {
		$mode[] = $_POST['mode4'];
	} else {
		$mode[] = '';
	}
	$hash_4_a = $_POST['hash4a'];
	$hash_4_b = $_POST['hash4b'];
	$hash_4_c = $_POST['hash4c'];
	$hash_4_d = $_POST['hash4d'];
	$hash_4_e = $_POST['hash4e'];
	$formedhash = '(' . $hash_4_a . '/' . $hash_4_b . '/' . $hash_4_c . '/' . $hash_4_d . '/' . $hash_4_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed5'] != '') {
	$seed[] = $_POST['seed5'];
	if(isset($_POST['mode5'])) {
		$mode[] = $_POST['mode5'];
	} else {
		$mode[] = '';
	}
	$hash_5_a = $_POST['hash5a'];
	$hash_5_b = $_POST['hash5b'];
	$hash_5_c = $_POST['hash5c'];
	$hash_5_d = $_POST['hash5d'];
	$hash_5_e = $_POST['hash5e'];
	$formedhash = '(' . $hash_5_a . '/' . $hash_5_b . '/' . $hash_5_c . '/' . $hash_5_d . '/' . $hash_5_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed6'] != '') {
	$seed[] = $_POST['seed6'];
	if(isset($_POST['mode6'])) {
		$mode[] = $_POST['mode6'];
	} else {
		$mode[] = '';
	}
	$hash_6_a = $_POST['hash6a'];
	$hash_6_b = $_POST['hash6b'];
	$hash_6_c = $_POST['hash6c'];
	$hash_6_d = $_POST['hash6d'];
	$hash_6_e = $_POST['hash6e'];
	$formedhash = '(' . $hash_6_a . '/' . $hash_6_b . '/' . $hash_6_c . '/' . $hash_6_d . '/' . $hash_6_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed7'] != '') {
	$seed[] = $_POST['seed7'];
	if(isset($_POST['mode7'])) {
		$mode[] = $_POST['mode7'];
	} else {
		$mode[] = '';
	}
	$hash_7_a = $_POST['hash7a'];
	$hash_7_b = $_POST['hash7b'];
	$hash_7_c = $_POST['hash7c'];
	$hash_7_d = $_POST['hash7d'];
	$hash_7_e = $_POST['hash7e'];
	$formedhash = '(' . $hash_7_a . '/' . $hash_7_b . '/' . $hash_7_c . '/' . $hash_7_d . '/' . $hash_7_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed8'] != '') {
	$seed[] = $_POST['seed8'];
	if(isset($_POST['mode8'])) {
		$mode[] = $_POST['mode8'];
	} else {
		$mode[] = '';
	}
	$hash_8_a = $_POST['hash8a'];
	$hash_8_b = $_POST['hash8b'];
	$hash_8_c = $_POST['hash8c'];
	$hash_8_d = $_POST['hash8d'];
	$hash_8_e = $_POST['hash8e'];
	$formedhash = '(' . $hash_8_a . '/' . $hash_8_b . '/' . $hash_8_c . '/' . $hash_8_d . '/' . $hash_8_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed9'] != '') {
	$seed[] = $_POST['seed9'];
	if(isset($_POST['mode9'])) {
		$mode[] = $_POST['mode9'];
	} else {
		$mode[] = '';
	}
	$hash_9_a = $_POST['hash9a'];
	$hash_9_b = $_POST['hash9b'];
	$hash_9_c = $_POST['hash9c'];
	$hash_9_d = $_POST['hash9d'];
	$hash_9_e = $_POST['hash9e'];
	$formedhash = '(' . $hash_9_a . '/' . $hash_9_b . '/' . $hash_9_c . '/' . $hash_9_d . '/' . $hash_9_e . ')';
	$hash[] = $formedhash;
}
if($_POST['seed10'] != '') {
	$seed[] = $_POST['seed10'];
	if(isset($_POST['mode10'])) {
		$mode[] = $_POST['mode10'];
	} else {
		$mode[] = '';
	}
	$hash_10_a = $_POST['hash10a'];
	$hash_10_b = $_POST['hash10b'];
	$hash_10_c = $_POST['hash10c'];
	$hash_10_d = $_POST['hash10d'];
	$hash_10_e = $_POST['hash10e'];
	$formedhash = '(' . $hash_10_a . '/' . $hash_10_b . '/' . $hash_10_c . '/' . $hash_10_d . '/' . $hash_10_e . ')';
	$hash[] = $formedhash;
}
$stmt = $conn->prepare("INSERT INTO custom_async (name, description, approved) VALUES (?, ?, 'n')");
$stmt->bind_param("ss", $name, $description);
$stmt->execute();
$stmt->close();
for ($a=0;$a<10;$a++) {
	if(!isset($seed[$a])) {
		break;
	} elseif(substr($seed[$a], 0, 8) != 'https://') {
		break;
	} else {
		$stmt = $conn->prepare("SELECT id FROM custom_async ORDER BY id DESC LIMIT 1");
		$stmt->execute();
		$rslt = $stmt->get_result();
		while($row = $rslt->fetch_assoc()) {
			$id = $row['id'];
		}
		$stmt->close();
		$stmt = $conn->prepare("INSERT INTO custom_seeds (async_id, seed, mode, hash) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("isss", $id, $seed[$a], $mode[$a], $hash[$a]);
		$stmt->execute();
		$stmt->close();
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Custom Async Submission Received</title>
    <link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
  </head>
  <body>
    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href=<?php echo '"' . $domain; ?>">Home</a></span><span class="headercenter"><a href=<?php echo '"' . $domain; ?>/featured">Featured Modes</a></span><span class="headerright"><a href=<?php echo '"' . $domain; ?>/faq">FAQ</a></span></div>
    <br><br><hr>
    <h1>Submission Accepted!</h1>
	<p>Please wait for an admin to approve your submission.<br>
	Details:<br>
	Async Series Name - <?php echo $name; ?><br>
	Description - <?php echo $description; ?></p><hr>
	<p>
<?php
for ($a=0;$a<10;$a++) {
	if(!isset($seed[$a])) {
		break;
	} elseif(substr($seed[$a], 0, 8) != 'https://') {
		echo '    Seed ' . $a + 1 . ' REJECTED - Please provide a full, valid URL.<br>' . PHP_EOL;
	} else {
		echo '    Seed ' . $a + 1 . ' - ' . $seed[$a] . ' ACCEPTED<br>' . PHP_EOL;
	}
}
?>
    </p>
  </body>
</html>