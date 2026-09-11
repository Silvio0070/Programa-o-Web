<?php
//número com readline
//Número = (int) $_POST["txtNumero];

$numero = (int) readline("Informe um número: ");
if (($numero % 2) == 0) {
    print "O número inteiro $numero é par";
}
print "O número inteiro $numero é impar";
?>