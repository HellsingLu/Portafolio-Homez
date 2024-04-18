<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="post">
        <label for="numero">Ingrese el numero: </label>
        <input type="number" name="numero" id="numero">
        <input type="submit" value="determinar">
    </form>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if ($numero > 0) {
            echo "El numero es positivo.";
        } elseif ($numero < 0) {
            echo "El numero es negativo.";
        } else {
            echo "El numero es cero.";
        }
    }
    ?>
</body>
</html>
