<?php

$numeros = [10, 5, 8, -3, 7, -2];

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] < 0) {
        echo "O primeiro número negativo está no índice: $i";
        break;
    }
}

?>
