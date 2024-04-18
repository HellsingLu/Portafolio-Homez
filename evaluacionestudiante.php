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
    $calificacion = $_POST["calificacion"];

    if ($calificacion >= 90) {
        echo "Excelente trabajo.";
    } elseif ($calificacion >= 80) {
        echo "Buen trabajo.";
    } elseif ($calificacion >= 70) {
        echo "Aprobado.";
    } else {
        echo "No aprobado.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="calificacion">Calificación del estudiante:</label>
    <input type="number" name="calificacion" min="0" max="100" required>
    <input type="submit" value="Evaluar">
</form>
</center>
</body>
</html>