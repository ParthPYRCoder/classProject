<html>
<div>
<center>

<?php
//<h3>Hello Good morning</h3>
date_default_timezone_set('Asia/Kolkata');
$time = date("H");
if ($time < "12") {
        echo "<h2>Good morning ";
    } else
    if ($time >= "12" && $time < "17") {
        echo "<h2>Good afternoon ";
    } else
      if ($time >= "17" && $time < "19") {
        echo "<h2>Good evening ";
    } else
    if ($time >= "19") {
        echo "<h2>Good night ";
    }
echo '<br>';
echo 'its '.date("l").' ';
echo 'And Time is '.date("h:i a");
?>
</center>
</div>
</html>