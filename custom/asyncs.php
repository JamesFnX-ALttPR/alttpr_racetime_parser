<?php
include('../settings.php');
include('../functions.php');
$domain = getRequestURL();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Custom Async Management</title>
    <link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
  </head>
  <body>
    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href=<?php echo '"' . $domain; ?>">Home</a></span><span class="headercenter"><a href=<?php echo '"' . $domain; ?>/featured">Featured Modes</a></span><span class="headerright"><a href=<?php echo '"' . $domain; ?>/faq">FAQ</a></span></div>
    <br><br><hr>
    <h1>Custom Async Management</h1>
	<div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href=<?php echo '"' . $domain; ?>/custom/create.php">Create Asyncs</a></span><span class="headerright"><a href=<?php echo '"' . $domain; ?>/custom/add.php">Add Seeds to Async</a></span></div>
  </body>
</html>