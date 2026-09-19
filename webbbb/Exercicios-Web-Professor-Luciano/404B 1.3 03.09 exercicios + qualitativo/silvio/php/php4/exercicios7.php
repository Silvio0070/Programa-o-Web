<?php

$numeros = [];

for ($i = 0; $i < 3; $i++) {
    $numeros[$i] = readline("Digite o " . ($i + 1) . "º número: ");
}

$numeros = array_reverse($numeros);

foreach($numeros as $n){
    echo "$n ";
}

?>
