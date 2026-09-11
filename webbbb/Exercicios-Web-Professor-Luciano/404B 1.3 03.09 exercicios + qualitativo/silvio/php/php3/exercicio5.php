<?php
$a = readline("Insira o valor 1: ");
$b = readline("Insira o valor 2: ");
$media = ($a+$b)/2;
if ($a > $b){
    $diferenca = $a - $b;
} else {
    $diferenca = $b-$a;
};
$produto = $b * $a;
$divisao = $a/$b;
echo "A media é $media, a diferenca é $diferenca, o produto é $produto e a diivisao é $divisao"

?>