<?php
$par = 0;
$impar = 0;
$i = 1;
while ($i <=10){
    $x = readline("Insira o valor $x: ");
    if ($x % 2 ==0){
        $par = $par +$x;
    } else {
        $impar = $impar+$x;
    }
    $i++;
    }
    echo "A soma dos pares é $par e a soma dos impares é $impar";
    ?>
