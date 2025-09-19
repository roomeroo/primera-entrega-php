<?php
$palos = ["Oros", "Copas", "Espadas", "Bastos"];
$figuras = [1, 2, 3, 4, 5, 6, 7, 10, 11, 12];

$puntosBrisca = [
    1 => 11,   // As
    3 => 10,
    10 => 2,   // Sota
    11 => 3,   // Cabalo
    12 => 4    // Rey
];

$baraja = [];
foreach ($palos as $palo) {
    foreach ($figuras as $figura) {
        $nombre = $figura;
        if ($figura == 10) $nombre = "Sota";
        elseif ($figura == 11) $nombre = "Caballo";
        elseif ($figura == 12) $nombre = "Rey";

        $baraja[] = [
            "palo" => $palo,
            "figura" => $nombre,
            "valor" => $figura
        ];
    }
}

shuffle($baraja);

$seleccion = array_slice($baraja, 0, 10);

$totalPuntos = 0;
echo "<h2>Cartas seleccionadas:</h2><ul>";
foreach ($seleccion as $carta) {
    $figuraValor = $carta["valor"];
    $puntos = $puntosBrisca[$figuraValor] ?? 0;
    $totalPuntos += $puntos;

    echo "<li>{$carta['figura']} de {$carta['palo']} - Puntos: $puntos</li>";
}
echo "</ul>";
echo "<h3>Total de puntos: $totalPuntos</h3>";
?>
<br><a href="index.php">Volver atrás</a>
