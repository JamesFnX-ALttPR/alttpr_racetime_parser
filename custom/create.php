<?php
include('settings.php');
include('functions.php');
$domain = getRequestURL();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Custom Async Submission</title>
    <link rel="stylesheet" href=<?php echo '"' . $domain; ?>/styles.css">
    <link rel="stylesheet" type="text/css" href=<?php echo '"' . $domain; ?>/ms-dropdown/css/dd.css" />
  </head>
  <body>
    <div style="width: 50%; margin-left: auto; margin-right: auto; text-align: center;"><span class="headerleft"><a href=<?php echo '"' . $domain; ?>">Home</a></span><span class="headercenter"><a href=<?php echo '"' . $domain; ?>/featured">Featured Modes</a></span><span class="headerright"><a href=<?php echo '"' . $domain; ?>/faq">FAQ</a></span></div>
    <br><br><hr>
    <h1>Custom Async Submission Form</h1>
    <form method="post" action=<?php echo '"' . $domain; ?>/custom/created.php">
      <table style="width: 75%; text-align: center;" class="submit">
        <tr>
          <td class="submitLabel"><label for="name">Name of Tourney or Async Series:</td>
          <td class="submitField"><input type="text" id="name" name="name" size="64" required></td>
        </tr>
        <tr>
          <td class="submitLabel"><label for="description">Description of Tourney:</td>
          <td class="submitField"><textarea id="description" name="description" rows="4" cols="60">Put in some information about your tourney or async series.</textarea></td>
        </tr>
      </table>
      <div style="text-align: center; font-family: Calibri; font-weight: bold; color: white;">Input up to 10 seeds</div>
      <hr>
      <table style="width: 75%; text-align: center;" class="submit">
        <tr>
          <th>Link to Seed</th>
          <th>Mode</th>
          <th>Hash</th>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed1" name="seed1" required></td>
          <td class="submitField"><input type="text" id="mode1" name="mode1"></td>
          <td class="submitField">
            <select name="hash1a" id="hash1a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash1b" id="hash1b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash1c" id="hash1c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash1d" id="hash1d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash1e" id="hash1e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed2" name="seed2"></td>
          <td class="submitField"><input type="text" id="mode2" name="mode2"></td>
          <td class="submitField">
            <select name="hash2a" id="hash2a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash2b" id="hash2b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash2c" id="hash2c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash2d" id="hash2d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash2e" id="hash2e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed3" name="seed3"></td>
          <td class="submitField"><input type="text" id="mode3" name="mode3"></td>
          <td class="submitField">
            <select name="hash3a" id="hash3a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash3b" id="hash3b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash3c" id="hash3c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash3d" id="hash3d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash3e" id="hash3e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed4" name="seed4"></td>
          <td class="submitField"><input type="text" id="mode4" name="mode4"></td>
          <td class="submitField">
            <select name="hash4a" id="hash4a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash4b" id="hash4b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash4c" id="hash4c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash4d" id="hash4d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash4e" id="hash4e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed5" name="seed5"></td>
          <td class="submitField"><input type="text" id="mode5" name="mode5"></td>
          <td class="submitField">
            <select name="hash5a" id="hash5a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash5b" id="hash5b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash5c" id="hash5c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash5d" id="hash5d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash5e" id="hash5e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed6" name="seed6"></td>
          <td class="submitField"><input type="text" id="mode6" name="mode6"></td>
          <td class="submitField">
            <select name="hash6a" id="hash6a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash6b" id="hash6b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash6c" id="hash6c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash6d" id="hash6d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash6e" id="hash6e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed7" name="seed7"></td>
          <td class="submitField"><input type="text" id="mode7" name="mode7"></td>
          <td class="submitField">
            <select name="hash7a" id="hash7a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash7b" id="hash7b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash7c" id="hash7c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash7d" id="hash7d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash7e" id="hash7e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed8" name="seed8"></td>
          <td class="submitField"><input type="text" id="mode8" name="mode8"></td>
          <td class="submitField">
            <select name="hash8a" id="hash8a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash8b" id="hash8b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash8c" id="hash8c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash8d" id="hash8d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash8e" id="hash8e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed9" name="seed9"></td>
          <td class="submitField"><input type="text" id="mode9" name="mode9"></td>
          <td class="submitField">
            <select name="hash9a" id="hash9a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash9b" id="hash9b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash9c" id="hash9c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash9d" id="hash9d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash9e" id="hash9e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="submitField"><input type="text" id="seed10" name="seed10"></td>
          <td class="submitField"><input type="text" id="mode10" name="mode10"></td>
          <td class="submitField">
            <select name="hash10a" id="hash10a" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash10b" id="hash10b" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash10c" id="hash10c" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash10d" id="hash10d" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
            <select name="hash10e" id="hash10e" is="ms-dropdown" style="max-width: 50px;">
              <option value="Big Key" data-image=<?php echo '"' . $domain; ?>/images/big_key.png"></option>
              <option value="Bombos" data-image=<?php echo '"' . $domain; ?>/images/bombos.png"></option>
              <option value="Bombs" data-image=<?php echo '"' . $domain; ?>/images/bombs.png"></option>
              <option value="Book" data-image=<?php echo '"' . $domain; ?>/images/book.png"></option>
              <option value="Boomerang" data-image=<?php echo '"' . $domain; ?>/images/boomerang.png"></option>
              <option value="Boots" data-image=<?php echo '"' . $domain; ?>/images/boots.png"></option>
              <option value="Bow" data-image=<?php echo '"' . $domain; ?>/images/bow.png"></option>
              <option value="Bugnet" data-image=<?php echo '"' . $domain; ?>/images/bugnet.png"></option>
              <option value="Cape" data-image=<?php echo '"' . $domain; ?>/images/cape.png"></option>
              <option value="Compass" data-image=<?php echo '"' . $domain; ?>/images/compass.png"></option>
              <option value="Empty Bottle" data-image=<?php echo '"' . $domain; ?>/images/empty_bottle.png"></option>
              <option value="Ether" data-image=<?php echo '"' . $domain; ?>/images/ether.png"></option>
              <option value="Flippers" data-image=<?php echo '"' . $domain; ?>/images/flippers.png"></option>
              <option value="Flute" data-image=<?php echo '"' . $domain; ?>/images/flute.png"></option>
              <option value="Gloves" data-image=<?php echo '"' . $domain; ?>/images/gloves.png"></option>
              <option value="Green Potion" data-image=<?php echo '"' . $domain; ?>/images/green_potion.png"></option>
              <option value="Hammer" data-image=<?php echo '"' . $domain; ?>/images/hammer.png"></option>
              <option value="Heart" data-image=<?php echo '"' . $domain; ?>/images/heart.png"></option>
              <option value="Hookshot" data-image=<?php echo '"' . $domain; ?>/images/hookshot.png"></option>
              <option value="Ice Rod" data-image=<?php echo '"' . $domain; ?>/images/ice_rod.png"></option>
              <option value="Lamp" data-image=<?php echo '"' . $domain; ?>/images/lamp.png"></option>
              <option value="Magic Powder" data-image=<?php echo '"' . $domain; ?>/images/magic_powder.png"></option>
              <option value="Map" data-image=<?php echo '"' . $domain; ?>/images/map.png"></option>
              <option value="Mirror" data-image=<?php echo '"' . $domain; ?>/images/mirror.png"></option>
              <option value="Moon Pearl" data-image=<?php echo '"' . $domain; ?>/images/moon_pearl.png"></option>
              <option value="Mushroom" data-image=<?php echo '"' . $domain; ?>/images/mushroom.png"></option>
              <option value="Pendant" data-image=<?php echo '"' . $domain; ?>/images/pendant.png"></option>
              <option value="Quake" data-image=<?php echo '"' . $domain; ?>/images/quake.png"></option>
              <option value="Shield" data-image=<?php echo '"' . $domain; ?>/images/shield.png"></option>
              <option value="Shovel" data-image=<?php echo '"' . $domain; ?>/images/shovel.png"></option>
              <option value="Somaria" data-image=<?php echo '"' . $domain; ?>/images/somaria.png"></option>
              <option value="Tunic" data-image=<?php echo '"' . $domain; ?>/images/tunic.png"></option>
            </select>
          </td>
        </tr>
		<tr>
          <td colspan="3" class="submitButton"><input type="submit" value="Submit Asyncs"></td>
        </tr>
      </table>
    </form>
    <script src=<?php echo '"' . $domain; ?>/ms-dropdown/js/dd.min.js"></script>
  </body>
</html>