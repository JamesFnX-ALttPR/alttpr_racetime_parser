<?php
include('functions.php');
include('settings.php');
$domain = getRequestURL();
$raceid = $_POST['race_id'];
if(empty($raceid)) {
  die('No Race Found Somehow?');
}
$conn = new mysqli($server,$user,$pass,$dbdev);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT async_id, mode, hash FROM custom_seeds WHERE id = ?");
$stmt->bind_param("i", $raceid);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
  $async_id = $row['async_id'];
  $mode = $row['mode'];
  $hash = $row['hash'];
  $parsedHash = hashToImages($hash);
}
$stmt->close();
$stmt = $conn->prepare("SELECT name FROM custom_async WHERE id = ?");
$stmt->bind_param("i", $async_id);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()) {
        $asyncname = $row['name'];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
    <title> Custom Asyncs - Submit Your Time</title>
  </head>
  <body>
<?php
echo '    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href="' . $domain . '">Home</a></span><span class="headercenter"><a href="' . $domain . '/featured">Featured Modes</a></span><span class="headerright"><a href="' . $domain . '/faq">FAQ</a></span></div>' . PHP_EOL;
echo '    <br><br><hr>' . PHP_EOL;
echo '    <h1>Custom Asyncs - Submit Your Time</h1>' . PHP_EOL;
?>
    <p class="header"><?= $asyncname ?> - <?= $mode ?><br /><?= $parsedHash ?></p>
    <form method="post" action=<?php echo '"' . $domain; ?>/customasync/timesubmitted">
      <table class="submit">
        <tr>
          <td class="submitLabel"><label for="name">Your Name:</label></td>
          <td class="submitField"><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="time">Your Time (H:mm:ss format, enter FF for a forfeit):</td>
          <td class="submitField"><input type="text" id="time" name="time" required></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="igt">Your In-Game Time (from the finish screen, leave blank if not single segment):</td>
          <td class="submitField"><input type="text" id="igt" name="igt"></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="cr">Collection Rate (from the finish screen):</td>
          <td class="submitField"><input type="text" id="cr" name="cr"></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="comments">Comments:</td>
          <td class="submitField"><input type="text" id="comments" name="comments"></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="vod">Link to VOD:</td>
          <td class="submitField"><input type="text" id="vod" name="vod"></td>
        </tr>
        <tr>
          <td colspan="2" class="submitButton"><input type="hidden" id="raceid" name="raceid" value="<?= $raceid ?>"><input type="submit" value="Submit Time"></td>
        </tr>
      </table>
    </form>
  </body>
</html>