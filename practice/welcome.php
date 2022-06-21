<?php
//session_start();
echo $_COOKIE['data'];
setcookie('data','',time() - 3600,'/');
?>