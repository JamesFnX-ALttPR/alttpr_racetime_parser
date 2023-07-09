<?php

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
    $rtn = $rtn . '<img src="./images/' . strtolower(str_replace(' ','_',$str)) . '.png" height="25" width="25" alt="' . $str . '">&nbsp;';
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
  if(substr($seed, 0, 8) != 'https://') {
    return 'false';
  }
  $pattern = "/^\(([A-Za-z ]*\/){4}[A-Za-z ]*\)/";
  if(preg_match($pattern,$hash) != 1) {
    return 'false';
  }
  return 'true';
}
function parseComment($s) {
  if($s == 'null') {
    return '';
  } else {
    $c = htmlentities($s);
    return $c;
  }
}
?>
