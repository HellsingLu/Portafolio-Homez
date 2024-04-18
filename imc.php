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
        <h1>Calculadora de Imc</h1>
        <?php
        $peso= 62;
        $altura= 1.76;
        $imc= $peso/($altura*$altura);
        echo "<p>Su peso es: </p>", $peso;
        echo "<p>Su altura es: </p>", $altura; 
        echo "<p>El imc del usuario es de: </p>", $imc;
        ?>
        <br> <br>
        <img src="imc.webp" border="0">
    </center>
</body>
</html>