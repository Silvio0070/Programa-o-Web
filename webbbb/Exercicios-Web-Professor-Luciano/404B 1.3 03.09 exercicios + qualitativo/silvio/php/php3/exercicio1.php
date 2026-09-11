<?php
$n1 = readline("Insira a nota 1: ");
$n2 = readline("Insira a nota 2: ");
$n3 = readline("Insira a nota 3: ");
$n4 = readline("Insira a nota 4: ");
$media = ($n1 + $n2 + $n3 + $n4)/4;
if ($media <7) {
    echo "O aluno foi reprovado com média $media";
} else {
    echo "O aluno foi aprovado com média $media";
}

?>