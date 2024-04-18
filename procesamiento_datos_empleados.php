<?php
$sueldos = [];
$salarioPromedio = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sueldo'])) {
    $sueldos[] = floatval($_POST['sueldo']);
}

if (isset($_POST['sueldos_existentes']) && $_POST['sueldos_existentes'] != '') {
    $sueldosExistentes = explode('|', $_POST['sueldos_existentes']);
    $sueldos = array_merge($sueldos, $sueldosExistentes);
}

if (count($sueldos) > 0) {
    $totalSueldos = array_sum($sueldos);
    $salarioPromedio = $totalSueldos / count($sueldos);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Salario Promedio de Empleados</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 5px;
        width: 300px;
        text-align: center;
    }

    h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    h2 {
        color: #666;
        font-size: 18px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input[type="number"] {
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        padding: 10px;
        border: none;
        border-radius: 4px;
        color: #fff;
        background-color: #007bff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        margin-bottom: 10px;
    }

    </style>
</head>
<body>
    <div class="container">
        <h1>Salario Promedio de Empleados</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="sueldo">Sueldo del Empleado:</label>
            <input type="number" name="sueldo" id="sueldo" min="0" step="0.01" required><br><br>
            
            <input type="hidden" name="sueldos_existentes" value="<?php echo implode('|', $sueldos); ?>">
            
            <input type="submit" value="Agregar Sueldo">
        </form>

        <?php if (!empty($sueldos)): ?>
            <h2>Salarios Ingresados</h2>
            <ul>
                <?php foreach ($sueldos as $sueldo): ?>
                    <li>$<?php echo number_format($sueldo, 2); ?></li>
                <?php endforeach; ?>
            </ul>
            <p>El salario promedio es: $<?php echo number_format($salarioPromedio, 2); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
