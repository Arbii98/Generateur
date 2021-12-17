<?php

	include "../DB/Config.php";
	include "TokenCore.php";
	include "ShiftCore.php";

	$tokenCore = new TokenCore();
	$list = $tokenCore->getAllTokens();

	$str ="azertyuiopqsdfghjklmwxcvbn1234567890AZERTYUIOPQSDFGHJKLMWXCVBN";
	do
	{
		$str= str_shuffle($str);
		$final = substr($str, 0,10);	
	}
	while(checkToken($final,$list));
	
	

	function checkToken($final,$list)
	{
		foreach ($list as $row) {
			if($row->token==$final)
			{
				return true;
			}
		}
		return false;
	}

	echo $final;


	$shiftC = new ShiftCore();
	$list = $shiftC->getCurrentShift();
	if(count($list)==0)
	{
		echo "ERROR, No current shift";
	}
	else
	{
		$tokenCore->addToken($final,$list[0]->id);
	}
	


?>