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
            $IMPUESTO = 1.21; //en tanto por uno
            $baseImponible = empty($_POST["baseImponible"])?0:$_POST["baseImponible"];

            if(is_numeric($baseImponible)){
                $total = $baseImponible * $IMPUESTO;
                echo "El total es: $total";
            }else{
                echo "No se pudo calcular la factura";
            }
        ?>
        <a href="./index.html">Volver atrás</a>
    </body>
</html>