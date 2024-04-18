<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menú de Actividades</title>
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
    <center>
    <div class="container">
        <h1>Menú de Actividades</h1>
        <h2>Estructuras cíclicas</h2>
        <form action="" method="post">
            <select name="activity" onchange="this.form.submit()">
                <option value="">Selecciona una actividad...</option>
                <option value="registro_ventas.php">Registro de Ventas Diarias</option>
                <option value="generacion_facturas.php">Generación de Facturas Mensuales</option>
                <option value="impresion_elementos.php">Impresión de Elementos de una Lista</option>
                <option value="procesamiento_datos_empleados.php">Procesamiento de Datos de Empleados</option>
            </select>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['activity'])) {
            $activity = $_POST['activity'];
            header("Location: $activity");
            exit;
        }
        ?>
    </div>
    </center>
</body>
</html>