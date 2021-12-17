<?php

	include "../DB/Config.php";
    include "ShiftCore.php";

    $shiftC = new ShiftCore();
    $list = $shiftC->getCurrentShift();
	if(count($list)==0)
	{
		$shiftC->startShift($_GET['num']);
	}
	else
	{
		echo "Error, shift already started !";
	}

?>