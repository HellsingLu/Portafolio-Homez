<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación de Números con Colores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-button {
        background-color: grey;
        /* Green background color */
        color: white;
        /* White text color */
        padding: 10px 20px;
        /* Some padding to make the link more prominent */
        text-align: center;
        /* Centers the text inside the link */
        text-decoration: none;
        /* Removes the default underline from the link */
        display: inline-block;
        /* Makes the link behave like a block-level element */
        font-size: 16px;
        /* Sets the font size of the link */
        margin: 4px 2px;
        /* Adds some margin around the link */
        border-radius: 4px;
        /* Adds some rounded corners */
        transition-duration: 0.4s;
        /* Adds a transition effect when hovering over the link */
    }
    </style>
</head>

<body>
    <center>
        <h2>Ingresar Números</h2>
        <form method="post">
            <label for="cantidad">Cantidad de Números:</label>
            <input type="number" name="cantidad" required>
            <button type="submit">Generar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidad'])) {
            $cantidadNumeros = $_POST['cantidad'];

            $numerosAleatorios = array();
            for ($i = 0; $i < $cantidadNumeros; $i++) {
                $numerosAleatorios[] = rand(1, 100);
            }

            $numerosPares = array();
            $numerosImpares = array();

            foreach ($numerosAleatorios as $numero) {
                if ($numero % 2 == 0) {
                    $numerosPares[] = $numero;
                } else {
                    $numerosImpares[] = $numero;
                }
            }
            ?>

            <h2>Números Pares</h2>
            <table>
                <tr>
                    <th>Número</th>
                </tr>
                <?php foreach ($numerosPares as $numero): ?>
                <tr>
                    <td><?= $numero ?></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <h2>Números Impares</h2>
            <table>
                <tr>
                    <th>Número</th>
                </tr>
                <?php foreach ($numerosImpares as $numero): ?>
                <tr>
                    <td><?= $numero ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <?php } ?>
        <br>
        <a href="index.html" class="back-button">Regresar a Inicio</a>
    </center>
</body>

</html>
