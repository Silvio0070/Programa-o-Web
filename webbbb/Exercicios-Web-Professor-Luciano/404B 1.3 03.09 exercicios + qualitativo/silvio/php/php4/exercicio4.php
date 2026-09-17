<?php
$info = [];
for($i = 0; $i <5; $i++){
    $nome = readline("Insira o nome do aluno " . $i+1 . ": ");
    $nota = readline("Insira a nota do aluno " . $i+1 . ": ");
    $info[$nome] = [$nota];
}
foreach($info as inf){
    if($inf>5){
        echo 
    }
}
?>