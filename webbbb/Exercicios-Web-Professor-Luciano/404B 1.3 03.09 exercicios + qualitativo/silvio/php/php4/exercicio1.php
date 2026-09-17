<?php
    $valores = array(0,10,20,30,40,50,60,70,80,90);
    for($i=count($valores); $i>=0; $i = $i-1){
		$a = $i-1;
		if($a >=0){
        echo "$valores[$a] ";
		}
    }
?>