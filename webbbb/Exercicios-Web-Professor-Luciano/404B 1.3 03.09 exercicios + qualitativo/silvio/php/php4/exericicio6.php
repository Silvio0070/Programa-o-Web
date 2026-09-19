<?php

$notas = [];
$soma = 0;

for ($i = 0; $i < 80; $i++) {
    $nota = readline("Digite a nota do aluno " . ($i + 1) . ": ");

    $notas[$i] = $nota;
    $soma += $nota;
}

$media = $soma / 80;


for ($i = 0; $i < 80; $i++) {
    echo "Aluno " . ($i + 1) . ": " . $notas[$i] . "\n";
}

echo "\nMédia da turma: " . $media . "\n";

?>
