<?php
$facturasGeneradas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_clientes']) && isset($_POST['num_meses'])) {
    $numClientes = $_POST['num_clientes'];
    $numMeses = $_POST['num_meses'];
    $cliente = 1;

    do {

        for ($mes = 1; $mes <= $numMeses; $mes++) {

            $montoFactura = 200000;
            $facturasGeneradas[] = "Factura del cliente $cliente para el mes $mes: \$" . number_format($montoFactura, 2);
        }
        $cliente++;
    } while ($cliente <= $numClientes);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generación de Facturas Mensuales</title>
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
        <h1>Generación de Facturas Mensuales</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="num_clientes">Número de Clientes:</label>
            <input type="number" name="num_clientes" id="num_clientes" min="1" required><br><br>
            <label for="num_meses">Número de Meses:</label>
            <input type="number" name="num_meses" id="num_meses" min="1" required><br><br>
            <input type="submit" value="Generar Facturas">
        </form>

        <?php if (!empty($facturasGeneradas)): ?>
            <h2>Facturas Generadas</h2>
            <ul>
                <?php foreach ($facturasGeneradas as $factura): ?>
                    <li><?php echo $factura; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>