<?php
$produtos = [
    ['nome' => 'Mouse Pad', 'preco' => 30.00],
    ['nome' => 'Cadeira Gamer', 'preco' => 1200.00],
    ['nome' => 'Headset', 'preco' => 250.00],
    ['nome' => 'Webcam', 'preco' => 180.00]
];

$produtoMaisCaro = $produtos[0];

foreach ($produtos as $produto) {
    if ($produto['preco'] > $produtoMaisCaro['preco']) {
        $produtoMaisCaro = $produto;
    }
}

echo "O produto mais caro é: {$produtoMaisCaro['nome']} (R$ {$produtoMaisCaro['preco']})";
?>
