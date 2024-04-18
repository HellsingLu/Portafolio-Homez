<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<?php
$usuario_valido = "usuario";
$contrasena_valida = "contrasena";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    if ($usuario == $usuario_valido && $contrasena == $contrasena_valida) {
        echo "Bienvenido, " . $usuario . "! Tienes acceso completo a la aplicación.";
    } elseif ($usuario == "invitado") {
        echo "Acceso limitado para usuarios invitados.";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="usuario">Nombre de usuario:</label> <br>
    <input type="text" name="usuario" required>
    <br>
    <label for="contrasena">Contraseña:</label> <br>
    <input type="password" name="contrasena" required>
    <br> <br>
    <input type="submit" value="Ingresar">
</form>
</center>
</body>
</html>