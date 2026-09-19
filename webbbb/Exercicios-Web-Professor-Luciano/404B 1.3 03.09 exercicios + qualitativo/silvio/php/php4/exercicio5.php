<?php

$alunos = [];

for ($i = 0; $i < 5; $i++) {
    $nome = readline("Digite o nome do aluno " . ($i + 1) . ": ");
    $nota1 = readline("Digite a primeira nota: ");
    $nota2 = readline("Digite a segunda nota: ");

    $media = ($nota1 + $nota2) / 2;

    $alunos[$nome] = [
        "nota1" => $nota1,
        "nota2" => $nota2,
        "media" => $media
    ];

    foreach ($alunos as $nome => $dados) {
    echo "Nome: $nome\n";
    echo "Nota 1: {$dados['nota1']}\n";
    echo "Nota 2: {$dados['nota2']}\n";
    echo "Média: {$dados['media']}\n";
    echo "--------------------------\n";
}

?>
}