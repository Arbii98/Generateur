<?php

	include "../DB/Config.php";
    include "ShiftCore.php";

    $shiftC = new ShiftCore();
    $shiftC->markFinShift();

?>