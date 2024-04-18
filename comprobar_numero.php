<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    if ($numero > 0) {
        echo "<div class='mensaje positivo'>Número positivo</div>";
    } elseif ($numero < 0) {
        echo "<div class='mensaje negativo'>Número negativo</div>";
    } else {
        echo "<div class='mensaje cero'>Has digitado el número CERO</div>";
    }
}
?>