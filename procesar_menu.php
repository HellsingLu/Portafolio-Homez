<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST["menu"];
    switch ($opcion) {
        case "1":
            $plato = "Pizza";
            $precio = 7000;
            break;
        case "2":
            $plato = "Hamburguesa";
            $precio = 8000;
            break;
        case "3":
            $plato = "Ensalada";
            $precio = 5000;
            break;
        default:
            $plato = "Opción no válida";
            $precio = 0;
    }
    
    echo "<div class='container'><div class='mensaje'>Plato seleccionado: " . htmlspecialchars($plato) . " - Precio: $" . htmlspecialchars($precio) . "</div></div>";
}
?>
