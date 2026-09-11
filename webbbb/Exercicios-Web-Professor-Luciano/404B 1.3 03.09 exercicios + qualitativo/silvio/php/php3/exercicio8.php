<?php
$i = 1;
$mais50 = 0;
$media1020 = 0;
$altura1020 = 0;
$pessoasmenos40 = 0;
$qp= readline("");
while( $i <=25){
    echo "\nPessoa $i: \n";
    $idade = readline("idade: \n" );
    $altura = readline("Altura: \n");
    $peso = readline("Peso: \n");
    if ($idade > 50){
        $mais50 = $mais50+1;
    };
    if( $idade < 20 && $idade > 10){
        $media1020= $media1020+1;
        $altura1020= $altura1020= $altura;
    }
    if ($peso <40){
        $pessoasmenos40 = $pessoasmenos40 + 1;
    }
    echo "Pessoa $i\n pessoas com menos de 40 kgs: $pessoasmenos40 \n pessoas com altura entre 10 e 20: $altura1020 \n pessoa mais 50: $mais50";
	$i++;
}
$ma1020 = $media1020/$qp;
echo "\n\n\n Resultados: \n Pessoas com idade superior a 50 anos: $mais50 \n media das alturas entre 1 e 20 anos: $ma1020 \n percentual de pessoas com menos de 40 kgs: "
?>