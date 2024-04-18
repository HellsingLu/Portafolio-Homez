<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora IMC</title>
</head>
<body>
    <h1>Calculadora de Índice de Masa Corporal</h1>
    <form method="post">
        Peso (kg): <input type="text" name="peso"><br> <br>
        Altura (m): <input type="text" name="altura"><br> <br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);
        echo "Su Índice de Masa Corporal es: " . $imc;
    }
    ?>
</body>
</html>
