<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicios PHP</title>
        <link rel="stylesheet" href="./index.css">
    </head>

    <body>
        <div class="container">
            <h1>Ejercicios PHP</h1>

        <div class="card">
            <h2>1. Conversor de euro a pesetas</h2>
            <form action="conversorEurPeseta.php" method="get">
                <input type="number" placeholder="Cantidad en euros" name="euros">
                <input type="number" placeholder="Cantidad en pesetas" name="pesetas">
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>2. Calcular factura a partir de base imponible</h2>
            <form action="calcularFactura.php" method="post">
                <input type="number" name="baseImponible" placeholder="Base Imponible">
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>3. Volumen de un cono</h2>
            <form action="calcularCono.php" method="get">
                <input type="number" name="radio" placeholder="Radio" required>
                <input type="number" name="altura" placeholder="Altura" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>4. Saludo según la hora</h2>
            <form action="saludar.php" method="get">
                <input type="number" name="hora" placeholder="Hora (0-23)" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>5. Salario semanal</h2>
            <form action="salarioSemanal.php" method="get">
                <input type="number" name="horas" placeholder="Horas trabajadas" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>6. ¿Cuál es mi horóscopo?</h2>
            <form action="horoscopo.php" method="get">
                <input type="date" name="date" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>7. ¿Cuánto queda para medianoche?</h2>
            <form action="mediaNoche.php" method="get">
                <input type="time" name="time" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>8. Ordenar números ASC</h2>
            <form action="ordenarASC.php" method="get">
                <input type="number" name="numero1" placeholder="Número 1" required>
                <input type="number" name="numero2" placeholder="Número 2" required>
                <input type="number" name="numero3" placeholder="Número 3" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div class="card">
            <h2>9. Tabla de multiplicar</h2>
            <form action="tablaMultiplicar.php" method="get">
                <input type="number" name="numero" placeholder="Número" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <?php 
            $total = 0;
            $length = 0;
        ?>

        <div class="card" id="calcular-media">
            <h2>10. Calcular media de números positivos</h2>

            <?php
                $total = isset($_POST["total"]) ? (float)$_POST["total"] : 0;
                $count = isset($_POST["count"]) ? (int)$_POST["count"] : 0;
                $finalizado = false;

                if (isset($_POST["numero"])) {
                    $numero = (float)$_POST["numero"];

                    if ($numero < 0) {
                        $finalizado = true;
                    } else {
                        $total += $numero;
                        $count++;
                    }
                }

                if ($finalizado) {
                    if ($count > 0) {
                        $media = $total / $count;
                        echo "<p><strong>Media:</strong> $media</p>";
                    } else {
                        echo "<p>No se introdujeron números positivos.</p>";
                    }

                    echo '
                        <form method="post" action="#calcular-media">
                            <button type="submit">Reiniciar</button>
                        </form>
                    ';
                } else {
            ?>

            <form method="post" action="#calcular-media">
                <input type="number" name="numero" placeholder="Introduce un número (negativo para terminar)" required step="1">
                <input type="hidden" name="total" value="<?= $total ?>">
                <input type="hidden" name="count" value="<?= $count ?>">
                <button type="submit">Enviar</button>
            </form>

            <?php } ?>
        </div>

        <div class="card">
            <h2>11. Serie de Fibonacci</h2>
            <form action="fibonacci.php" method="get">
                <input type="number" name="n" min="1" placeholder="Introduce un número" required>
                <button type="submit">Calcular</button>
            </form>
        </div>

        <div class="card">
            <h2>12. Pirámide personalizada</h2>
            <form action="piramide.php" method="get">
                <input type="number" name="altura" min="1" placeholder="Introduce altura" required>

                <p>Selecciona una imagen para construir la pirámide:</p>
                <select name="bloque" required>
                    <option value="./src/imagen1.png">Gato</option>
                    <option value="./src/imagen2.png">Jirafa</option>
                    <option value="./src/imagen3.png">Antonio</option>
                    <option value="./src/imagen4.png">Avestruz</option>
                    <option value="./src/imagen5.png">Ladrillo</option>
                </select>

                <br><br>
                <button type="submit">Dibujar pirámide</button>
            </form>
        </div>

        <div class="card">
            <h2>13. Calcula el factorial</h2>
            <form action="factorial.php" method="get">
                <input type="number" name="numero" min="0" placeholder="Introduce un número entero" required>
                <button type="submit">Calcular factorial</button>
            </form>
        </div>

        <div class="card">
            <h2>14. Juego de la Brisca</h2>
            <form action="brisca.php" method="get">
                <button type="submit">Sacar 10 cartas</button>
            </form>
        </div>

        <div class="card">
            <h2>15. Movimiento del Alfil en Ajedrez</h2>
            <form action="alfil.php" method="get">
                <label for="posicion">Posición del alfil (ejemplo: a1, e4, h8): </label>
                <input type="text" name="posicion" id="posicion" pattern="[a-h][1-8]" required maxlength="2" placeholder="e4" />
                <button type="submit">Mostrar movimientos</button>
            </form>
        </div>





    </body>
</html>
