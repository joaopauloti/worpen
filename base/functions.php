<?php

function wpen_filter_text($type, $input) {
  switch ($type) {

    case 'int':
      $input = intval($input);
      return $input;
      break;

    case 'text':
      $input = addslashes($input);
      return $input;
      break;

    case 'email':
      $input = addslashes($input);
      $input = strtolower($input);
      $input = str_replace(" ", "_", $input);
      return $input;
      break;

    case 'url':
      $input = addslashes($input);
      $input = str_replace(" ", "", $input);
      return $input;
      break;

    case 'up':
      $input = ucwords($input);
      return $input;
      break;

    case 'upper':
      $input = strtoupper($input);
      return $input;
      break;

    case 'lower':
      $input = strtolower($input);
      return $input;
      break;

    case 'password':
      $input = addslashes($input);
      $input = "212.9a.~54g-4f".$input."3912".INFO_hash."I32rgvf54125FGR_";
      $input = "9a2bf7ba".md5($input)."8y45r";
      return $input;
      break;

    case 'encode':
      $input = base64_encode($input);
      return $input;
      break;

    case 'decode':
      $input = base64_decode($input);
      return $input;
      break;

    default:
      return false;
      break;

  }
}
