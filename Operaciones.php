<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <?php
    $num1= 4;
    $num2= 3;

    echo "<p>El primer numero es: </p>", $num1;
    echo "<p>El segundo numero es: </p>", $num2;

    $suma= $num1 + $num2;
    $resta= $num1 - $num2;
    $multi= $num1 * $num2;
    $divi= $num1 / $num2;

    echo "<p>El resultado de la suma es: </p>", $suma;
    echo "<p>El resultado de la resta es: </p>", $resta;
    echo "<p>El resultado de la multiplicacion es: </p>", $multi;
    echo "<p>El resultado de la division es: </p>", $divi;
    ?>
    </center>
</body>
</html>