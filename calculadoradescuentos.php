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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto_total = $_POST["monto_total"];
    $descuento = 0;
    $porcentaje_descuento = 0;

    if ($monto_total >= 100) {
        $descuento = $monto_total * 0.10;
        $porcentaje_descuento = 10;
    } elseif ($monto_total >= 50) {
        $descuento = $monto_total * 0.05;
        $porcentaje_descuento = 5;
    }

    $monto_final = $monto_total - $descuento;

    echo "Monto original: $" . $monto_total . "<br>";
    echo "Descuento: " . $porcentaje_descuento . "%<br>";
    echo "Monto final: $" . $monto_final;
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="monto_total">Monto total de la compra:</label>
    <input type="number" name="monto_total" required>
    <input type="submit" value="Calcular descuento">
</form>
</center>
</body>
</html>