<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Factorial</title>
</head>
<body>
    <?php
        $num = isset($_GET["numero"]) ? intval($_GET["numero"]) : -1;

        if ($num < 0) {
            echo "<p>Por favor, introduce un número entero mayor o igual a 0.</p>";
        } else {
            $factorial = 1;
            for ($i = 2; $i <= $num; $i++) {
                $factorial *= $i;
            }

            echo "<h2>Factorial de $num</h2>";
            echo "<p>$num! = $factorial</p>";
        }
    ?>

    <br><br>
    <a href="index.php">Volver atrás</a>
</body>
</html>
