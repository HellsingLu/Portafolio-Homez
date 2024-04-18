<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales de Colombia</title>
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

    .back-button:hover {
        background-color: darkgrey;
    }
    </style>
</head>

<body>
    <center>
        <?php
        $ciudadesColombia = array(
            array("Bogotá", "Cundinamarca"),
            array("Medellín", "Antioquia"),
            array("Barranquilla", "Atlántico")
        );
        echo "<h2>Capitales de Colombia</h2>";
        echo "<p>Número de ciudades: " . count($ciudadesColombia) . "</p>";

        echo "<table border='1'>";
        echo "<tr><th>Ciudad</th> <th>Departamento</th></tr>";

        foreach ($ciudadesColombia as $ciudad) {
            echo "<tr>";
            foreach ($ciudad as $detale) {
                echo "<td>$detale</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <a href="index.html" class="back-button">Regresar a Inicio</a>
    </center>
</body>

</html>