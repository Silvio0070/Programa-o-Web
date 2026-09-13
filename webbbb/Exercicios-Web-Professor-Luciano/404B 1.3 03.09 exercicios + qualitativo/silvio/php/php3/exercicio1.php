<?php
$op =1;
$alt = 0;
while ($op <=4){
    $n= readline("Insira a nota $op: ");
    $alt = $alt + $n;
    $op++;
}
$media = $alt/4;
if ($media <7) {
    echo "O aluno foi reprovado com média $media";
} else {
    echo "O aluno foi aprovado com média $media";
}

?>
