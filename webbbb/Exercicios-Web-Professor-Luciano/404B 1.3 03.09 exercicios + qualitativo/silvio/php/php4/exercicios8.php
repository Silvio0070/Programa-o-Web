<?php

$numeros = [];
$q = readline("Quantos números deseja colocar? ");
for ($i = 0; $i < $q; $i++) {
    $numeros[$i] = readline("Digite o " . ($i + 1) . "º número: ");
}

$numeros = array_reverse($numeros);

foreach($numeros as $n){
    echo "$n ";
}

?>
