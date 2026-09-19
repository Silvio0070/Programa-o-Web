<?php

$numeros = [10, 5, 8, 5, 3, 5, 7];

$numero = readline("Digite o número que deseja procurar: ");

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] == $numero) {
        echo "O número $numero aparece no índice $i\n";
    }
}

?>
