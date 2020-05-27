<?php
require_once 'controllers/usuario.php';
$controlador = new UsuarioController();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST["consulta"])){
        $controlador->mostrarTodo();
    }elseif (isset($_POST["crear"])) {
        $controlador->crear();
    } 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="submit" value="Mostrar usuarios" name="consulta">
        <input type="submit" value="Crear usuario" name="crear">
    </form>
</body>
</html>