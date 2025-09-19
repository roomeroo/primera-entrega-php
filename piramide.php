<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pirámide con imágenes centrada</title>
    <style>
        .fila {
            display: flex;
            justify-content: center;
            margin-bottom: 5px;
        }
        .bloque {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <?php
        $altura = isset($_GET["altura"]) ? intval($_GET["altura"]) : 0;
        $bloque = isset($_GET["bloque"]) ? $_GET["bloque"] : "";

        if ($altura > 0 && !empty($bloque)) {
            echo "<h2>Pirámide de altura $altura</h2>";

            for ($i = 1; $i <= $altura; $i++) {
                echo '<div class="fila">';
                for ($j = 0; $j < $i; $j++) {
                    echo '<img src="' . htmlspecialchars($bloque) . '" alt="bloque" class="bloque">';
                }
                echo '</div>';
            }
        } else {
            echo "<p>Por favor, introduce una altura válida y selecciona una imagen.</p>";
        }
    ?>

    <br><br>
    <a href="index.php">Volver atrás</a>
</body>
</html>
