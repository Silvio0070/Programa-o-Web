<?php
$pessoas = [
    ['nome' => 'Ana', 'idade' => 15],
    ['nome' => 'Carlos', 'idade' => 20],
    ['nome' => 'Mariana', 'idade' => 18],
    ['nome' => 'Lucas', 'idade' => 12]
];

foreach ($pessoas as $pessoa) {
    if ($pessoa['idade'] >= 18) {
        echo "Maior de idade: {$pessoa['nome']}\n";
    }
}
?>
