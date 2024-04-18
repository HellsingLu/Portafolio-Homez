<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
    <style>
    h2,
    p {
        color: #212121;
        font-family: 'Roboto', Arial, sans-serif;
        font-weight: 400;
        margin: 0 0 20px 0;
    }

    table {
        width: 10%;
        text-align: center;
        border-collapse: collapse;
        margin: 25px auto;
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

    .back-button:hover {
        background-color: darkgrey;
    }
    </style>
</head>

<body>
    <center>
        <?php
$frutas=array(
array("Banano"),
array("Papaya"),
array("Manzana"),
array("Mango"),
array("Pera")
);
echo "<h2>Lista de frutas</h2>";
echo "<p>Número de frutas: ". count ($frutas). "</p>";

echo "<table border='1'>";
echo "<tr><th>Frutas</th></tr>";

foreach ($frutas as $listafrutas) {
echo "<tr>";
foreach ($listafrutas as $detale) {
    echo "<td>$detale</td>";
}
echo "</tr>";
}
echo "</table>";
?>
        <a href="inicioQ.html" class="back-button">Regresar a Inicio del Quiz</a>
    </center>
</body>

</html>