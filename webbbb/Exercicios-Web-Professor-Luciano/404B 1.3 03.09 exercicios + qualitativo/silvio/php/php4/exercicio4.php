<?php
$info = [];

for ($i = 0; $i < 5; $i++) {
    $nome = readline("Insira o nome do aluno " . ($i + 1) . ": ");
    $nota = readline("Insira a nota do aluno " . ($i + 1) . ": ");

    $info[$nome] = $nota;
}

foreach ($info as $nome => $nota) {
    if ($nota > 5) {
        echo "O aluno $nome tirou nota $nota\n";
    }
}
?>
