<?php
$contas = [
    ['titular' => 'Alice', 'saldo' => 2500.50],
    ['titular' => 'Roberto', 'saldo' => 150.00],
    ['titular' => 'Fernanda', 'saldo' => 5400.00]
];

foreach ($contas as $conta) {
    echo "Titular: {$conta['titular']} | Saldo: R$ " . number_format($conta['saldo'], 2, ',', '.') . "\n";
}
?>
