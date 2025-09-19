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
            $valorPeseta = 166.386; // 1 euro
            $euros = $_GET["euros"];
            $pesetas = $_GET["pesetas"];

            $pesetas = empty($pesetas)? 0:$pesetas;
            $euros = empty($euros)? 0:$euros;

        if(is_numeric($pesetas) && is_numeric($euros)){
            //Comprueba que ambos no sea cero y que ambos sean numericos o que ambos tengan valores
            
            if( $euros == 0 && $pesetas == 0 ){
                echo "Que esta pasando aqui se coherente";
            }else if($pesetas == 0){
                $total = $euros * $valorPeseta;
                echo "$euros euros, son $total pesetas.";
            }else if($euros == 0){
                $total = $pesetas / $valorPeseta;
                echo "$pesetas pesetas son, $total euros.";
            }else{
                echo "ERROR: Números no válidos";
            }
        }else echo "casi";
        ?>
        <a href="./index.php">Volver atrás</a>
    </body>
</html>