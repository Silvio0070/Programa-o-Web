<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = filter_input(INPUT_POST, 'valor1, FILTER', FILTER_VALIDATE_FLOAT);
        $valor2 = filter_input(INPUT_POST, 'valor2, FILTER', FILTER_VALIDATE_FLOAT);
        
        if($valor1 === false ||  $valor2 === false) {
            echo "Por favor, insira valores númericos válidos.";
            exit;
        }

        $soma = $valor1 + $valor2;
        $produto = $valor1*$valor2;
        echo "<strong> a) soma:</strong>" . $soma . "<br>";
        echo "<strong> a) produto:</strong>" . $produto . "<br>";

        if ($valor2!=0){
            $quociente = $valor1 / $valor2;
            echo "<strong> a) quociente:</strong>" . $quociente . "<br>";
        } else {
            echo "<strong> a) qouciente:</strong>  impossilvio dividir por 0";
        }

    }
    ?>
</body>
</html>