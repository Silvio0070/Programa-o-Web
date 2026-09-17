<?php
$alunos = array();
for ($i =0; $i <10; $i = $i +1){
    $alunos[$i] = readline("insira o aluno " . $i+1 . ": ");
}
foreach($alunos as $n){
    if($n >5){
        echo "$n \n";
    }
}
?>