<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Notas</title>
</head>
<body>
    <center>
    <h1>Calculadora de Notas del Colegio Comfandi</h1>
    <form method="post">
        Nota 1: <input type="text" name="nota1"><br> <br>
        Nota 2: <input type="text" name="nota2"><br> <br>
        Nota 3: <input type="text" name="nota3"><br> <br>
        <input type="submit" name="submit" value="Calcular"> <br>
    </form>
    </center>
    <?php
    if(isset($_POST['submit'])) {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota_final = ($nota1 + $nota2 + $nota3) / 3;
        echo "La nota final es: " . $nota_final;
    }
    ?>
</body>
</html>
