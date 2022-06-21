<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	echo 'Hyy  '.$_POST['name'].':)';
}
?>
<html>
<body>
<form method="POST">
NAME :<input type="text" name="name"></input>
<button  type="submit">SUBMIT</button>
</form>
</body>
</html>