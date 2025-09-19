<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Movimiento del Alfil</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            font-size: 18px;
        }
        .white {
            background-color: white;
        }
        .black {
            background-color: black;
        }
        .alfil {
            background-color: green;
            color: white;
        }
        .movimiento {
            background-color: yellow;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
function posicionValida($pos) {
    return preg_match('/^[a-h][1-8]$/', $pos);
}

function letraANumero($letra) {
    return ord($letra) - ord('a') + 1;
}

function numeroALetra($num) {
    return chr($num + ord('a') - 1);
}

function obtenerMovimientosAlfil($col, $fila) {
    $movimientos = [];

    $direcciones = [
        [1, 1],    
        [1, -1],   
        [-1, 1],   
        [-1, -1]   
    ];

    foreach ($direcciones as $dir) {
        $c = $col;
        $f = $fila;
        while (true) {
            $c += $dir[0];
            $f += $dir[1];
            if ($c < 1 || $c > 8 || $f < 1 || $f > 8) {
                break;
            }
            $movimientos[] = [$c, $f];
        }
    }
    return $movimientos;
}

$posicion = isset($_GET["posicion"]) ? strtolower(trim($_GET["posicion"])) : "";

if (!posicionValida($posicion)) {
    echo "<p>Posición inválida. Debe ser una letra de 'a' a 'h' seguida de un número de 1 a 8, por ejemplo 'e4'.</p>";
    echo '<br><a href="index.php">Volver atrás</a>';
    exit;
}

$columna = letraANumero($posicion[0]);
$fila = intval($posicion[1]);

$movimientos = obtenerMovimientosAlfil($columna, $fila);

echo "<h2>Posición del alfil: <strong>$posicion</strong></h2>";
echo '<table border="1" cellspacing="0" cellpadding="0">';

for ($f = 8; $f >= 1; $f--) {
    echo "<tr>";
    for ($c = 1; $c <= 8; $c++) {
        $color = (($c + $f) % 2 == 0) ? "white" : "black";

        $clases = [$color];

        if ($c == $columna && $f == $fila) {
            $clases[] = "alfil";
            $contenido = "*";
        }
        else if (in_array([$c, $f], $movimientos)) {
            $clases[] = "movimiento";
            $contenido = "";
        } else {
            $contenido = "";
        }

        echo "<td class='" . implode(" ", $clases) . "'>";
        echo $contenido;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo '<br><a href="index.php">Volver atrás</a>';
?>

</body>
</html>
