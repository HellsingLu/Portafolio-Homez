<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el color</title>
</head>
<body>
    <center>
    <form method="post">
        <label for="color">Ingrese el color: </label>
        <input type="text" name="color" id="color">
        <input type="submit" value="Adivina">
    </form>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $color = $_POST["color"];
        $colorasignado = "verde";
        if ($color === $colorasignado) {
            echo "Adivinaste el color correctamente.";
        } else {
            echo "No adivinaste el color correctamente.";
        }
    }
    ?>
</body>
</html>