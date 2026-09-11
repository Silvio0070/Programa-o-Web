<?php
$a = readline("Insira o valor");
echo "Expressão  |  resultado\n";
for ($i=1; $i<=10; $i = $i +1){
    $r = $a * $i;
    echo "$a x $i = " .  $r . "\n";
}
?>