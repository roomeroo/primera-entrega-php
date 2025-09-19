
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="index.css">
    </head>

    <body class="column">
        <?php
                $n1 = isset($_GET['numero1']) ? (float)$_GET['numero1'] : null;
                $n2 = isset($_GET['numero2']) ? (float)$_GET['numero2'] : null;
                $n3 = isset($_GET['numero3']) ? (float)$_GET['numero3'] : null;

                if ($n1 === null || $n2 === null || $n3 === null) {
                    echo "Por favor, proporciona los tres números usando los parámetros 'n1', 'n2' y 'n3'.";
                } else {
                    $numeros = [$n1, $n2, $n3];
                    sort($numeros); 

                    echo "Números ordenados de menor a mayor: ";
                    echo implode(", ", $numeros);   //concatenar
                }
        ?>
        <a href="./index.php">Volver atrás</a>
    </body>
</html>