<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación de Números</title>
    <style>
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
        <?php
        // Generar un arreglo con 10 números enteros aleatorios
        $numerosAleatorios = array();
        for ($i = 0; $i < 10; $i++) {
            $numerosAleatorios[] = rand(1, 100); // Puedes ajustar el rango según tus necesidades
        }

        // Inicializar arreglos para números pares e impares
        $numerosPares = array();
        $numerosImpares = array();

        // Clasificar los números en arreglos pares e impares
        foreach ($numerosAleatorios as $numero) {
            if ($numero % 2 == 0) {
                $numerosPares[] = $numero;
            } else {
                $numerosImpares[] = $numero;
            }
        }
        ?>

        <h2>Números Aleatorios</h2>
        <table border='1'>
            <tr>
                <th>Número</th>
            </tr>
            <?php foreach ($numerosAleatorios as $numero) : ?>
                <tr>
                    <td><?= $numero ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Números Pares</h2>
        <table border='1'>
            <tr>
                <th>Número Par</th>
            </tr>
            <?php foreach ($numerosPares as $numeroPar) : ?>
                <tr>
                    <td><?= $numeroPar ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2>Números Impares</h2>
        <table border='1'>
            <tr>
                <th>Número Impar</th>
            </tr>
            <?php foreach ($numerosImpares as $numeroImpar) : ?>
                <tr>
                    <td><?= $numeroImpar ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="index.html" class="back-button">Regresar a Inicio</a>
    </center>
</body>

</html>