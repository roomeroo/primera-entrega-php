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
            $numero = $_GET["numero"];
            if ($numero !== null && is_numeric($numero)): ?>
            <h3>Tabla del <?= $numero ?></h3>
            <table>
                <tr>
                    <th>Multiplicación</th>
                    <th>Resultado</th>
                </tr>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <tr>
                        <td><?= "$numero × $i" ?></td>
                        <td><?= $numero * $i ?></td>
                    </tr>
                <?php endfor; ?>
            </table>
        <?php endif; ?>
    </body>
    <a href="./index.php"></a>
</html>