<?php
$a = readline("insira o valor 1: ");
$b = readline("insira o valor 2: ");
if ($b != 0){
    $c = $a / $b;
    echo "O quociente é $c";
} else {
    echo "divisão por zero";
}
?>