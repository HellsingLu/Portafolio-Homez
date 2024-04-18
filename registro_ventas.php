<?php
$ventas = [];

if (isset($_POST['venta'])) {

    if (isset($_POST['ventas']) && $_POST['ventas'] !== '') {
        $ventas = explode(',', $_POST['ventas']);
    }


    $ventas[] = floatval($_POST['venta']);
}

$totalVentas = 0;

if (count($ventas) === 7) {
    $totalVentas = array_sum($ventas);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Ventas Diarias</title>
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

    select, input[type="text"] {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro de Ventas Diarias</h1>
        
        <?php if ($totalVentas > 0): ?>
            <p>El total de ventas de la semana es: <?php echo $totalVentas; ?></p>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="venta">Venta del día <?php echo count($ventas) + 1; ?>:</label>
                <input type="number" name="venta" id="venta" required><br><br>
                <input type="hidden" name="ventas" value="<?php echo implode(',', $ventas); ?>">
                <input type="submit" value="Agregar Venta">
            </form>
        <?php endif; ?>
    </div>
</body>
</html>