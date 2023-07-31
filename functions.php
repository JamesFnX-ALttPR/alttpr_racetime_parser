<?php

function getRequestURL() {
  if (isset($_SERVER['HTTPS']) &&
  ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
  isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
  $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $protocol = 'https://';
  } else {
    $protocol = 'http://';
  }
  $url = $protocol . $_SERVER['HTTP_HOST'];
  return $url;
}

function validHash($s) {
        $hashImages = array("Big Key", "Bombs", "Bombos", "Book", "Boomerang", "Boots", "Bow", "Bugnet", "Cape", "Compass", "Empty Bottle", "Ether", "Flippers", "Flute", "Gloves", "Green Potion", "Hammer", "Heart", "Hookshot", "Ice Rod", "Lamp", "Magic Powder", "Map", "Mirror", "Moon Pearl", "Mushroom", "Pendant", "Quake", "Shield", "Shovel", "Somaria", "Tunic");
        $testHash = explode('/', str_replace('(', '', str_replace(')', '', $s)));
        if(count($testHash) != 5) {
                return 'false';
        }
        foreach($testHash as $str) {
                if(!in_array($str, $hashImages)) {
                        return 'false';
                }
        }
        return 'true';
}

function parseName($s) {
  $pattern = "/.*\#[0-9]{4}/";
  if(preg_match($pattern,$s) != 1) {
    return $s;
  } else {
    $sArray = explode('#',$s);
    return $sArray[0];
  }
}

function convertTime($s) {
  $a = explode('T0', $s);
  if(count($a) <2) {
    return "9:59:59";
  }
  $b = $a[1];
  $c = explode('H', $b);
  $hour = $c[0];
  $d = $c[1];
  $e = explode('M', $d);
  $minute = $e[0];
  $second = substr($e[1],0,2);
  return $hour . ":" . $minute . ":" . $second;
}

function hashToImages($s) {
  $s = str_replace('(','',str_replace(')','',$s));
  $sArray = explode('/', $s);
  $rtn = '';
  foreach($sArray as $str) {
    $rtn = $rtn . '<img src="' . getRequestURL() . '/images/' . strtolower(str_replace(' ','_',$str)) . '.png" height="25" width="25" alt="' . $str . '">&nbsp;';
  }
  return $rtn;
}

function parseAPI($s) {
  $sArray = explode(": ", $s);
  if(count($sArray) != 2) {
    return ['', ''];
  }
  $a = str_replace('"', '', $sArray[0]);
  $b = str_replace('"', '', $sArray[1]);
  return [$a, $b];
}

function parseInfo($s) {
  $sArray = explode(' - ',$s,3);
  if(count($sArray) != 3) {
    return ['', '', ''];
  }
  return $sArray;
}

function parseHashDesc($s) {
  $sArray = explode('\\n',$s,2);
  if(count($sArray) != 2) {
    return [$sArray[0], ''];
  }
  return $sArray;
}

function parseDate($s) {
  $sArray = explode('T',$s);
  return $sArray[0];
}

function validateData($s) {
  $sArray = explode('||', $s);
  if(count($sArray) < 7) {
    return 'false';
  }
  $seed = $sArray[2];
  $hash = $sArray[3];
  if(substr($seed, 0, 18) != 'https://alttpr.com') {
    return 'false';
  }
  $pattern = "/^\(([A-Za-z ]*\/){4}[A-Za-z ]*\)/";
  if(preg_match($pattern,$hash) != 1) {
    return 'false';
  }
  return 'true';
}

function timeToSeconds(string $s): int {
  $sarray = explode(":", $s);
  return $sarray[0] * 3600 + $sarray[1] * 60 + $sarray[2];
}
function secondsToTime($i) {
  $hour = floor($i / 3600);
  $minute = floor(($i - $hour * 3600) / 60);
  $second = $i - $hour * 3600 - $minute * 60;
  if($minute < 10) {
    if($second < 10) {
      $s = strval($hour) . ':0' . strval($minute) . ':0' . strval($second);
    } else {
      $s = strval($hour) . ':0' . strval($minute) . ':' . strval($second);
    }
  } else {
    if($second < 10) {
      $s = strval($hour) . ':' . strval($minute) . ':0' . strval($second);
    } else {
      $s = strval($hour) . ':' . strval($minute) . ':' . strval($second);
    }
  }
  return $s;
}
?>
