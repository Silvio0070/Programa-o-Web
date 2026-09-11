<?php
$n = readline("Insira o numero");
if ($n > 9999 or $n < 100){
	echo "Insira um numero de 4 digitos!";
} else{

	$p = $n[0];
	$u = $n[3];
	echo " o primeiro é $p e o ultimo é $u";
	} 
?>