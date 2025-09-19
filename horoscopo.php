<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        
        $fecha = $_GET["date"];
        
        if (isset($fecha)) {
            $date = DateTime::createFromFormat('Y-m-d', $fecha);

            if ($date && $date->format('Y-m-d') === $fecha) {
                $mes = (int)$date->format('m');
                $dia = (int)$date->format('d');
                
                function obtenerHoroscopo($dia, $mes) {
                    switch ($mes) {
                        case 1: return ($dia <= 19) ? "Capricornio" : "Acuario";
                        case 2: return ($dia <= 18) ? "Acuario" : "Piscis";
                        case 3: return ($dia <= 20) ? "Piscis" : "Aries";
                        case 4: return ($dia <= 19) ? "Aries" : "Tauro";
                        case 5: return ($dia <= 20) ? "Tauro" : "Géminis";
                        case 6: return ($dia <= 20) ? "Géminis" : "Cáncer";
                        case 7: return ($dia <= 22) ? "Cáncer" : "Leo";
                        case 8: return ($dia <= 22) ? "Leo" : "Virgo";
                        case 9: return ($dia <= 22) ? "Virgo" : "Libra";
                        case 10: return ($dia <= 22) ? "Libra" : "Escorpio";
                        case 11: return ($dia <= 21) ? "Escorpio" : "Sagitario";
                        case 12: return ($dia <= 21) ? "Sagitario" : "Capricornio";
                        default: return "Mes inválido.";
                    }
                }

                $signo = obtenerHoroscopo($dia, $mes);
                echo "Tu fecha de nacimiento es: $fecha<br>";
                echo "Tu signo del zodíaco es: <strong>$signo</strong>";
            } else {
                echo "Fecha inválida. Asegúrate de usar el formato correcto.";
            }
        } else {
            echo "Por favor, selecciona tu fecha de nacimiento.";
        }
        ?>
        <a href="./index.php">Volver atrás</a>

    </body>
</html>