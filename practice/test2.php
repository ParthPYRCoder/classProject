<?php
define('NUM1','5870');
define('NUM2','60');
define('OPERATOR','MUL');

function add($num1,$num2){
return $num1+$num2;
}
function div($num1,$num2){
return $num1/$num2;
}
function mul($num1,$num2){
return $num1*$num2;
}
function sub($num1,$num2){
return $num1-$num2;
}
if(!is_numeric(NUM1))
	{
	echo 'NUMBER 1 IS NOT NUMARIC';
	echo '<br>';}
	if(!is_numeric(NUM2))
	{
	echo 'NUMBER 2 IS NOT NUMARIC';
	}
	elseif(OPERATOR == 'ADD' || OPERATOR == 'DIV' || OPERATOR == 'MUL' || OPERATOR == 'SUB')
		{
		switch (OPERATOR) {
		case "ADD":
		echo add(NUM1,NUM2);
		break;
		
		case "DIV":
		if(NUM2 == 0)
		{
			echo 'Can not divide';
		}
		else{
		echo div(NUM1,NUM2);
		}
		break;
		
		case "MUL":
		echo mul(NUM1,NUM2);
		break;
		
		case "SUB":
		echo sub(NUM1,NUM2);
		break;
		}
	}
	else
	{
		echo 'Invalid Operator';
	}
	
	
?>