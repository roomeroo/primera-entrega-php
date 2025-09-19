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

            $time = $_GET["time"];
            if(isset($time)){
                $array = explode(':', $time);
                $hora = $array[0];
                $minuto = $array[1];
            }

            if ($hora === null || $minuto === null) {
                echo "Por favor, proporciona los parámetros 'hora' y 'minuto'.";
            } elseif ($hora < 0 || $hora > 23 || $minuto < 0 || $minuto > 59) {
                echo "Hora o minuto fuera de rango válido.";
            } else {
                $segundosTotalesDia = 24 * 60 * 60;
                $segundosTranscurridos = ($hora * 60 + $minuto) * 60;
                $segundosRestantes = $segundosTotalesDia - $segundosTranscurridos;

                echo "Hora actual: {$hora}:{$minuto}<br>";
                echo "Segundos que faltan para la medianoche: <strong>$segundosRestantes</strong>";
            }
        ?>
        <a href="./index.php">Volver atrás</a>
    </body>
</html>