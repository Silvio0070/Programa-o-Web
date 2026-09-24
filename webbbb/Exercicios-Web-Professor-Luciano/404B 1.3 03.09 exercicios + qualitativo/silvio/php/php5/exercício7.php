<?php
$pessoas = [
    ['nome' => 'silvio', 'idade' => 17],
    ['nome' => 'brenda', 'idade' => 16],
    ['nome' => 'fulano', 'idade' => 18],
    ['nome' => 'ciclano', 'idade' => 12]
];

foreach ($pessoas as $pessoa) {
    if ($pessoa['idade'] >= 18) {
        echo "Maior de idade: {$pessoa['nome']}\n";
    }
}
?>
