<?php
$value = 'Smit parmar';
setcookie('data', $value, time() + (86400 * 30), "/");
if(!isset($_COOKIE['data'])) {
  echo "Cookie named is not set!";
} else {
  echo "Cookie is set!<br>";
  echo "Value is: " . $_COOKIE['data'];
}
?>