<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

            $horas = isset($_GET["horas"])? $_GET["horas"]: 0;
            if(is_numeric($horas)){
                $salario = 0;

                if ($horas <= 40) {
                    $salario = $horas * 12;
                } else {
                    $salario = (40 * 12) + (($horas - 40) * 16);
                }

                echo "Horas trabajadas: $horas<br>";
                echo "Salario semanal: $salario euros";
            }
        ?>
        <a href="./index.php">Volver atrás</a>

    </body>
</html>