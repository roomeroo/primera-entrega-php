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
            $altura = empty($_GET["altura"])?0:$_GET["altura"];
            $radio = empty($_GET["radio"])?0:$_GET["radio"];

            if(is_numeric($altura) && is_numeric($radio)){
                $total = (1/3) * pi() * $radio**2 * $altura;
                echo "El area son: $total unidades al cubo.";
            }else echo "algo has hecho mal";
        ?>
        <a href="./index.html">Volver atrás</a>
    </body>
</html>