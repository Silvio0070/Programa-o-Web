<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT);
    }
    if ($altura === false|| $altura<0) {
        echo "Por favor, informe uma altura válida";
        exit;
    }
 
    $pesohomens = (72.7 * $altura) -58;
    $pesomulheres = (63.1 * $altura) - 44.7;
    echo "Peso ideal para a altura de mulheres é" . $pesomulheres . "e o peso ideal para homens é" . $pesohomens;
?>