<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
        $hora = empty($_GET["hora"]) ? 0 : $_GET["hora"];
        if (is_numeric($hora) && ($hora <= 24 && $hora >= 0)) {
            if ($hora >= 6 && $hora <= 12) {
                echo "buenos días";
            } else if ($hora >= 13 && $hora <= 20) {
                echo "buenas tardes";
            } else {
                echo "buenas noches";
            }
        } else {
            echo "Hora inválida.";
        }
    ?>
    <br>
    <a href="./index.html">Volver atrás</a>
</body>
</html>
