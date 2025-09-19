<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Serie de Fibonacci</title>
    </head>

    <body>
        <?php
            $n = isset($_GET["n"]) ? intval($_GET["n"]) : 0;

            if ($n <= 0) {
                echo "Por favor, introduce un número entero positivo.";
            } else {
                echo "<h2>Primeros $n términos de la serie de Fibonacci:</h2>";
                $a = 0;
                $b = 1;

                for ($i = 0; $i < $n; $i++) {
                    echo $a;
                    if ($i < $n - 1) echo ", ";

                    $temp = $a + $b;
                    $a = $b;
                    $b = $temp;
                }
            }
        ?>
        <br><br>
        <a href="index.php">Volver atrás</a>
    </body>
</html>
