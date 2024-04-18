<?php
$tareas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tarea']) && $_POST['tarea'] != '') {

    $tareas[] = htmlspecialchars($_POST['tarea']);
}

if (isset($_POST['tareas_existentes'])) {
    $tareasExistentes = explode('|', $_POST['tareas_existentes']);
    $tareas = array_merge($tareasExistentes, $tareas);
}
?>

<!DOCTYPE html>
<html lang="en">
<head><?php
$tareas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tarea']) && $_POST['tarea'] != '') {
    $tareas[] = htmlspecialchars($_POST['tarea']);
}

if (isset($_POST['tareas_existentes'])) {
    $tareasExistentes = explode('|', $_POST['tareas_existentes']);
    $tareas = array_merge($tareasExistentes, $tareas);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas Pendientes</title>
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

    input[type="text"] {
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
        <h1>Lista de Tareas Pendientes</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="tarea">Nueva Tarea:</label>
            <input type="text" name="tarea" id="tarea"><br><br>
            
            <input type="hidden" name="tareas_existentes" value="<?php echo implode('|', $tareas); ?>">
            
            <input type="submit" value="Agregar Tarea">
        </form>

        <?php if (!empty($tareas)): ?>
            <h2>Tareas Pendientes</h2>
            <ul>
                <?php for ($i = 0; $i < count($tareas); $i++): ?>
                    <li><?php echo $tareas[$i]; ?></li>
                <?php endfor; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>