<?php
$op = "s";
while ($op == "s"){
$n = readline("Insira o valor: ");
$g = $n%3;
if ($g == 0) {
    echo "É multiplo de 3\n";
} else {
    echo "Não é multiplo de 3 \n";
}
$op = readline("Deseja continuar? (s/n): ");
}
?>