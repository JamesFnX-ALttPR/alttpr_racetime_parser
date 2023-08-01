<?php
include('../settings.php');
include('../functions.php');
$domain = getRequestURL();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Custom Async Submission</title>
    <link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
  </head>
  <body>
    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href=<?php echo '"' . $domain; ?>">Home</a></span><span class="headercenter"><a href=<?php echo '"' . $domain; ?>/featured">Featured Modes</a></span><span class="headerright"><a href=<?php echo '"' . $domain; ?>/faq">FAQ</a></span></div>
    <br><br><hr>
    <h1>Custom Async Submission Form</h1>
    <form method="post" action=<?php echo '"' . $domain; ?>/custom/created.php">
      <table style="width: 50%; text-align: center;" class="submit">
        <tr>
          <td class="submitLabel"><label for="name">Name of Tourney or Async Series:</td>
          <td class="submitField"><input type="text" id="name" name="name" size="61" required></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="description">Description of Tourney:</td>
          <td class="submitField"><textarea id="description" name="description" rows="4" cols="60">Put in some information about your tourney or async series.</textarea></td>
        </tr>
        <tr>
          <td class="submitLabel" style="text-align: center;" colspan="2"><label for="coop">Check if this series is intended for co-op play: <input type="checkbox" id="coop" name="coop" /></td>
        </tr>
      </table>
      <br />
      <div style="text-align: center; font-family: Calibri; font-weight: bold; color: white;">Input up to 10 seeds</div>
      <hr>
      <table style="width: 50%; text-align: center;" class="submit">
        <tr>
          <th>Link to Seed</th>
          <th>Mode</th>
          <th>Hash - Input as (Symbol/Symbol/Symbol/Symbol/Symbol)</th>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed1" name="seed1" required></td>
          <td class="submitField"><input type="text" id="mode1" name="mode1"></td>
          <td class="submitField"><input type="text" id="hash1" name="hash1" required></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed2" name="seed2"></td>
          <td class="submitField"><input type="text" id="mode2" name="mode2"></td>
          <td class="submitField"><input type="text" id="hash2" name="hash2"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed3" name="seed3"></td>
          <td class="submitField"><input type="text" id="mode3" name="mode3"></td>
          <td class="submitField"><input type="text" id="hash3" name="hash3"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed4" name="seed4"></td>
          <td class="submitField"><input type="text" id="mode4" name="mode4"></td>
          <td class="submitField"><input type="text" id="hash4" name="hash4"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed5" name="seed5"></td>
          <td class="submitField"><input type="text" id="mode5" name="mode5"></td>
          <td class="submitField"><input type="text" id="hash5" name="hash5"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed6" name="seed6"></td>
          <td class="submitField"><input type="text" id="mode6" name="mode6"></td>
          <td class="submitField"><input type="text" id="hash6" name="hash6"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed7" name="seed7"></td>
          <td class="submitField"><input type="text" id="mode7" name="mode7"></td>
          <td class="submitField"><input type="text" id="hash7" name="hash7"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed8" name="seed8"></td>
          <td class="submitField"><input type="text" id="mode8" name="mode8"></td>
          <td class="submitField"><input type="text" id="hash8" name="hash8"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed9" name="seed9"></td>
          <td class="submitField"><input type="text" id="mode9" name="mode9"></td>
          <td class="submitField"><input type="text" id="hash9" name="hash9"></td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed10" name="seed10"></td>
          <td class="submitField"><input type="text" id="mode10" name="mode10"></td>
          <td class="submitField"><input type="text" id="hash10" name="hash10"></td>
        </tr>
                <tr>
          <td colspan="3" class="submitButton"><input type="submit" value="Submit Asyncs"></td>
        </tr>
      </table>
    </form>
  </body>
</html>