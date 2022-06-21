<?php
define('NUM1',0);
define('NUM2',50);
define('OPERATOR','DIV');
if(!is_numeric(NUM1))
	{
	echo 'NUMBER 1 IS NOT NUMARIC';
	}
	else if(!is_numeric(NUM2))
	{
	echo 'NUMBER 2 IS NOT NUMARIC';
	}
	else{
		if(OPERATOR == 'ADD' || OPERATOR == 'DIV' || OPERATOR == 'MUL' || OPERATOR == 'SUB')
		{
		switch (OPERATOR) {
		case "ADD":
		echo NUM1 + NUM2;
		break;
		
		case "DIV":
		if(NUM2 == 0)
		{
			echo 'Can not divide';
		}
		else{
		echo NUM1 / NUM2;
		}
		break;
		
		case "MUL":
		echo NUM1 * NUM2;
		break;
		
		case "SUB":
		echo NUM1 - NUM2;
		break;
		}
	}
	else
	{
		echo 'Invalid Operator';
	}
}


?>