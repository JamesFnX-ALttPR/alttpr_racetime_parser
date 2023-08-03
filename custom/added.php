<?php
include('../settings.php');
include('../functions.php');
$domain = getRequestURL();
$conn = new mysqli($server,$user,$pass,$db);
if ($conn->connect_error) {
	die('Connection failed: ' . $conn->connect_error);
}
if(isset($_POST['asyncseries'])) {
	$asyncid = $_POST['asyncseries'];
}
$seed = array();
$mode = array();
$hash = array();
$coop = array();
if($_POST['seed1'] != '') {
	$seed[] = $_POST['seed1'];
	if(isset($_POST['mode1'])) {
		$mode[] = $_POST['mode1'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash1'])) {
		if(validHash($_POST['hash1']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash1'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop1'];
}
if($_POST['seed2'] != '') {
	$seed[] = $_POST['seed2'];
	if(isset($_POST['mode2'])) {
		$mode[] = $_POST['mode2'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash2'])) {
		if(validHash($_POST['hash2']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash2'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop2'];
}
if($_POST['seed3'] != '') {
	$seed[] = $_POST['seed3'];
	if(isset($_POST['mode3'])) {
		$mode[] = $_POST['mode3'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash3'])) {
		if(validHash($_POST['hash3']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash3'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop3'];
}
if($_POST['seed4'] != '') {
	$seed[] = $_POST['seed4'];
	if(isset($_POST['mode4'])) {
		$mode[] = $_POST['mode4'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash4'])) {
		if(validHash($_POST['hash4']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash4'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop4'];
}
if($_POST['seed5'] != '') {
	$seed[] = $_POST['seed5'];
	if(isset($_POST['mode5'])) {
		$mode[] = $_POST['mode5'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash5'])) {
		if(validHash($_POST['hash5']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash5'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop5'];
}
if($_POST['seed6'] != '') {
	$seed[] = $_POST['seed6'];
	if(isset($_POST['mode6'])) {
		$mode[] = $_POST['mode6'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash6'])) {
		if(validHash($_POST['hash6']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash6'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop6'];
}
if($_POST['seed7'] != '') {
	$seed[] = $_POST['seed7'];
	if(isset($_POST['mode7'])) {
		$mode[] = $_POST['mode7'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash7'])) {
		if(validHash($_POST['hash7']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash7'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop7'];
}
if($_POST['seed8'] != '') {
	$seed[] = $_POST['seed8'];
	if(isset($_POST['mode8'])) {
		$mode[] = $_POST['mode8'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash8'])) {
		if(validHash($_POST['hash8']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash8'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop8'];
}
if($_POST['seed9'] != '') {
	$seed[] = $_POST['seed9'];
	if(isset($_POST['mode9'])) {
		$mode[] = $_POST['mode9'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash9'])) {
		if(validHash($_POST['hash9']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash9'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop9'];
}
if($_POST['seed10'] != '') {
	$seed[] = $_POST['seed10'];
	if(isset($_POST['mode10'])) {
		$mode[] = $_POST['mode10'];
	} else {
		$mode[] = '';
	}
	if(isset($_POST['hash10'])) {
		if(validHash($_POST['hash10']) == 'false') {
			$hash[] = 'Invalid';
		} else {
			$hash[] = $_POST['hash10'];
		}
	} else {
		$hash[] = 'Invalid';
	}
	$coop[] = $_POST['coop10'];
}
for ($a=0;$a<10;$a++) {
	if(!isset($seed[$a])) {
		break;
	} elseif(substr($seed[$a], 0, 8) != 'https://') {
		break;
	} elseif($hash[$a] == 'Invalid') {
		break;
	} else {
		$stmt = $conn->prepare("SELECT seed FROM custom_seeds WHERE async_id = ? AND seed = ?");
		$stmt->bind_param("is", $asyncid, $seed[$a]);
		$stmt->execute();
		$rslt = $stmt->get_result();
		$numrows = $rslt->num_rows;
		$stmt->close();
		if($numrows != 0) {
			$seed[$a] = 'Duplicate';
			break;
		} else {
			$stmt = $conn->prepare("INSERT INTO custom_seeds (async_id, seed, mode, hash, coop) VALUES (?, ?, ?, ?, ?)");
			$stmt->bind_param("issss", $asyncid, $seed[$a], $mode[$a], $hash[$a], $coop[$a]);
			$stmt->execute();
			$stmt->close();
        }
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Custom Async Seeds Successfully Added</title>
		<link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
	</head>
	<body>
		<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href=<?php echo '"' . $domain; ?>">Home</a></span><span class="headercenter"><a href=<?php echo '"' . $domain; ?>/featured">Featured Modes</a></span><span class="headerright"><a href=<?php echo '"' . $domain; ?>/faq">FAQ</a></span></div>
		<br><br><hr>
		<h1>Seeds Successfully Added</h1>
		<p>Details:<br />
<?php
$st = $conn->prepare("SELECT name, description FROM custom_async WHERE id = ?");
$st->bind_param("i", $asyncid);
$st->execute();
$result = $st->get_result();
$row = $result->fetch_assoc();
?>
    Async Series Name - <?php echo $row['name']; ?><br />
    Description - <?php echo $row['description']; ?></p><hr />
    <p><?php
for ($a=0;$a<10;$a++) {
	if(!isset($seed[$a])) {
		break;
	} elseif($seed[$a] == 'Duplicate') {
		echo 'Seed ' . $a + 1 . ' REJECTED - Duplicate of existing seed in this series.<br />';
	} elseif(substr($seed[$a], 0, 8) != 'https://') {
		echo 'Seed ' . $a + 1 . ' REJECTED - Please provide a full, valid URL.<br />';
	} elseif($hash[$a] == 'Invalid') {
		echo 'Seed ' . $a + 1 . ' REJECTED - Hash did not pass validation.<br />';
	} else {
		echo 'Seed ' . $a + 1 . ' - ' . $seed[$a] . ' ACCEPTED<br />';
	}
}
?></p>
	</body>
</html>
