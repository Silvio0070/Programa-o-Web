<?php
$a = readline("insira o valor 1: ");
$b = readline("insira o valor 2: ");
$c = readline("insira a operação (soma, divisao, subtracao ou multiplicao)");
switch ($c){
    case "soma": print "a soma é igual a " . $a + $b;
    break;
    case "divisao" : 
        if($b == 0){
            print "Divisão por zero";
        } else {
            print "a divisão é igual a " . $a / $b;
        }
    break;
    case "multiplicacao": print "a multiplicação é igual a 2 " . $a * $b;
    break;
    case "subtracao" : print "a subtração é " . $a - $b;
    break;
    default: echo "insira uma operação valida";
    break;
}
?>