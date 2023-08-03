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
$conn = new mysqli($server,$userro,$passro,$db);
if($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}
$st = $conn->prepare("SELECT id, name, description FROM custom_async ORDER BY id DESC");
$st->execute();
$rslt = $st->get_result();
echo '		<div class="topline"><a href="' . $domain . '">Home</a><a href="' . $domain. '/faq">FAQ</a><a href="' . $domain . '/featured">Featured Modes</a><a href="' . $domain . '/discord" target="_blank">Discord</a></div>' . PHP_EOL;
echo '    <br><br><hr>' . PHP_EOL;
echo '    <h1>Custom Asyncs for Tournaments and Communities</h1>' . PHP_EOL;
echo '    <table style="width: 90%;">' . PHP_EOL;
echo '      <tr><th>Name</th><th>Description</th><th>Number of Seeds</th></tr>' . PHP_EOL;
while($rw = $rslt->fetch_assoc()) {
        echo '      <tr><td style="font-family: \'Hylia Serif Beta\'; font-size: large; text-align: center;"><a href="' . $domain . '/customasync/' . $rw['id'] . '">' . $rw['name'] . '</a></td><td style="text-align: center;">' . $rw['description'] . '</td><td style="text-align: center;">';
        $stmt = $conn->prepare("SELECT id FROM custom_seeds WHERE async_id = ?");
        $stmt->bind_param("i", $rw['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        echo $result->num_rows;
        $stmt->close();
        echo '</td></tr>' . PHP_EOL;
}
echo "    </table>" . PHP_EOL;
$st->close();
?>
  </body>
</html>
