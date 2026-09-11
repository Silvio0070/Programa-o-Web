<?php
$valor = readline("Insira o valor em reais: ");
$tempo = readline("Insira o tempo em meses: ");
$taxa = readline("Insira o taxa: ");
$p = $valor + ($valor * ($taxa/100) * $tempo);
echo "O valor da prestação vai ser de $p reais"
?>