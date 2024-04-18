<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    h3 {
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
    <title>Registro</title>
</head>
<body>
    <center>
    <form action="Registro.php" method="post">
		<h3>Nombre de usuario</h3>
		<input type="text" name="us" id="us" required>
        <form action="Registro.php" method="post"> <br> <br>
		<h3>Correo electronico</h3>
		<input type="text" name="ce" id="ce" required>
        <form action="Registro.php" method="post"> <br> <br>
		<h3>Contraseña</h3>
		<input type="text" name="pw" id="pw" required>
        <form action="Registro.php" method="post"> <br> <br>
        <button type="submit" style="background-color: grey;
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
        background-color: darkgrey;
        ">Enviar datos</button> <br> <br>
    </form> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $us = $_POST['us'];
        $ce = $_POST['ce'];
        $pw = $_POST['pw'];


        echo "Su nombre de usuario es: " .$us. "<br>";
        echo "Su correo electronico es: " .$ce. "<br>";
        echo "Su contraseña es: " .$pw. "<br>";
    }
    ?>
    <a href="inicioQ.html" class="back-button">Regresar a Inicio del Quiz</a>
    </center>
</body>
</html>