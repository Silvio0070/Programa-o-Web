<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anos = filter_input(INPUT_POST, 'anos, FILTER', FILTER_VALIDATE_FLOAT);
        $cigarroDia = filter_input(INPUT_POST, 'cigarro_dia, FILTER', FILTER_VALIDATE_INT);
        $precoCarteira = filter_input(INPUT_POST, 'preco_cigarro, FILTER', FILTER_VALIDATE_FLOAT);

        if ($anos ===false || $cigarroDia === false || $precoCarteira === false) {
            echo "insira valores validos.";
            exit;
        }

        $totalDias = $anos * 365;
        $totalCigarros = $totalDias * $cigarroDia;
        $precoPorCigarro = $precoCarteira/ 20;

        $totalGastto = $totalCigarros * $precoPorCigarro;
        echo "<h1>Resultado dos calculos</h1>";
        echo "tempo fumando: " . $anos . "anos";
        echo "Totalde cigarros fumados: " . number_format($totalCigarros, 0, ',',',') . "<br>";
        echo "<strong> Total gasto: " . number_format($totalGastto,2,',',',') . "</strong>";


}
?>