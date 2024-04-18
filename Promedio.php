<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    p{
    color: #212121;
    font-family: 'Roboto', Arial, sans-serif;
    font-weight: 400;
    margin: 0 0 20px 0;
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
    <title>Promedio</title>
</head>

<body>
    <center>
        <?php
        $edades = array(25, 30, 35, 40, 45);
        $promedio =  array_sum($edades) / count($edades);
        
        echo "<br><p>La edad promedio es de: <p>" .$promedio;
        ?>
    <center><a href="inicioQ.html" class="back-button" style="margin-top: 10 px;">Regresar a Inicio del Quiz</a></center>
    </center>
</body>

</html>