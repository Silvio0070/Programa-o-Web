<?php
$idades =0;
$alturas = 0;
$p = 0;
while (True){
    $alt = readline("INSIRA A ALTURA: ");
    $idd = readline("INSIRA A IDADE: ");
    if ($idd >0){
        $alturas = $alturas + $alt;
        $idades = $idades + $idd;
        $p++;
    } else {
        break;
    }
}
$ma = $alturas/$p;
$mi = $idades/$p;
echo "A media das idades é $mi e a média das alturas é $ma.";
?>
