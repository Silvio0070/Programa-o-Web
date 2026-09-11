<?php
	//exemplo simples solicitando nome de usuário
	$name = readLine("informe sue nome");
	//verifica nome informado
	if ($name !== "") {
		echo "Olá $name! Prazer em conhecê-lo";
	} else {
		echo "você não digitou nome.";
	};
?>
