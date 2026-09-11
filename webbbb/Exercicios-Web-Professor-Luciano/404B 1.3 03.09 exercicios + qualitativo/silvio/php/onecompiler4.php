<?php
// operador ternario
// (condição)? expressão 1 : expresão 3;
// $x = (int) $_POST["txtx"]
// $y = (int) $_POST["txty"]

$x = readline("Digite o valor x: ");
$y = readline("Digite o valor y: ");
$maior = ($x > $y) ? $x: $y;
print "Maior valor = $maior";
?>