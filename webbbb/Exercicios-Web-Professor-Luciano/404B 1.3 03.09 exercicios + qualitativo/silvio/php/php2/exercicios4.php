<?php
$ha = readline("Insira o valor da hora aula: ");
$na = readline("Insira o valor do número de aulas: ");
$d = readline("Insira o valor do número do desconto em %: ");
$s = $ha * $na;
$sl = $s - (($d/100)*$s);
echo "O salário liquido vai ser de $sl reais";
?>