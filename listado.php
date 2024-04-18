<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios, Cuadrados y Cubos</title>
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
        echo "<h2>Números Aleatorios, Cuadrados y Cubos</h2>";

        echo "<table border='1'>";
        echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";

        for ($i = 1; $i <= 5; $i++) {
            $numeroAleatorio = rand(1, 100);
            $cuadrado = $numeroAleatorio ** 2;
            $cubo = $numeroAleatorio ** 3;

            echo "<tr>";
            echo "<td>$numeroAleatorio</td>";
            echo "<td>$cuadrado</td>";
            echo "<td>$cubo</td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
        <br>
        <a href="index.html" class="back-button">Regresar a Inicio</a>
    </center>
</body>

</html>