<?php
    include "../DB/Config.php";
	include "TokenCore.php";
    
    $tokenC = new TokenCore();
    $mulToken = "tgTPJ7i4ylaJ69zH7OEIaSJBnji2pH";


    echo substr($mulToken, 0,10)."<br>".substr($mulToken, 10,10)."<br>".substr($mulToken, 20,10);

    $tokenC->markBeforeCS(substr($mulToken, 0,10));
    $tokenC->markAfterCS(substr($mulToken, 0,10));
    $tokenC->markBeforeC(substr($mulToken, 0,10));
    $tokenC->markAfterC(substr($mulToken, 0,10));
    $tokenC->markBeforeS(substr($mulToken, 0,10));

    $tokenC->markBeforeCS(substr($mulToken, 10,10));
    $tokenC->markAfterCS(substr($mulToken, 10,10));
    $tokenC->markBeforeC(substr($mulToken, 10,10));
    $tokenC->markAfterC(substr($mulToken, 10,10));
    $tokenC->markBeforeS(substr($mulToken, 10,10));

    $tokenC->markBeforeCS(substr($mulToken, 20,10));
    $tokenC->markAfterCS(substr($mulToken, 20,10));
    $tokenC->markBeforeC(substr($mulToken, 20,10));
    $tokenC->markAfterC(substr($mulToken, 20,10));
    $tokenC->markBeforeS(substr($mulToken, 20,10));


    


?>