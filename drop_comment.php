<!DOCTYPE html>
<html>
  <head>
    <title>RaceTime Comment Moderation</title>
<?php
echo '    <meta http-equiv="refresh" content="2;URL=' . "'" . 'https://' . $_SERVER['HTTP_HOST'] . "/racetime/mod_comments.php'" . '" />' . PHP_EOL;
?>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<?php
include('settings.php');
include('functions.php');
$conn = new mysqli($server,$user,$pass,$db);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
if(empty($_POST['commentid'])) {
  die('No Comment Selected');
} else {
  $id = $_POST['commentid'];
}
$stmt = $conn->prepare("UPDATE times SET comments = '' WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
?>
    <h1>Comment Deleted Successfully - Redirecting to Comment Moderation</h1>
  </body>
</html>
