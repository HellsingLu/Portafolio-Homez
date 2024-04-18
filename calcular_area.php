<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Áreas</title>
</head>
<body>
    <center>
    <h1>Calculadora de Áreas de Figuras Geométricas</h1>
    <form method="post">
        Seleccione la figura:
        <select name="figura">
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="triangulo">Triángulo</option>
            <option value="circulo">Círculo</option>
        </select><br> <br>
        Dimension 1: <input type="text" name="dim1"><br> <br>
        Dimension 2: <input type="text" name="dim2"><br> <br>
        <input type="submit" name="submit" value="Calcular">
    </form>
    </center>
    <?php
    if(isset($_POST['submit'])) {
        $figura = $_POST['figura'];
        $dim1 = $_POST['dim1'];
        $dim2 = $_POST['dim2'];

        switch ($figura) {
            case 'cuadrado':
                $area = $dim1 * $dim1;
                break;
            case 'rectangulo':
                $area = $dim1 * $dim2;
                break;
            case 'triangulo':
                $area = ($dim1 * $dim2) / 2;
                break;
            case 'circulo':
                $area = pi() * pow($dim1, 2);
                break;
            default:
                $area = "Figura no reconocida";
                break;
        }
        echo "El área del " . $figura . " es: " . $area;
    }
    ?>
</body>
</html>

