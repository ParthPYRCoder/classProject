<html>
<body>
<center>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$num = $_POST['data'];
	echo '<h2><b>TEBLE OF ' . $num. '</b></h2>';
	for($i=1;$i<=10;$i++)
	{
		echo $num . 'X' . $i . '=' . $num*$i; 
		echo '<br>';
	}
}
?>
</body>
<form method="post">
<h4>Enter a Number : <input type=number name="data"></input></h4>
<br>
<button type="submit">SUBMIT</button>
</html>