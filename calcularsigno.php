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
    <?php
    $num = -5;
    if ($num > 0) {
        echo "El numero es positivo.";
    } elseif ($num < 0) {
        echo "El numero es negativo.";
    } else {
        echo "El numero es cero.";
    }
    ?>
    </center>
</body>
</html>