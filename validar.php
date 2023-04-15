<?php
include('conexion.php');

// Agarra los datos del Input
$correo = $_POST['correo5'];
$contrasena = $_POST['contrasena5'];

$consulta = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";
$stmt = mysqli_prepare($conexion, $consulta);
mysqli_stmt_bind_param($stmt, "ss", $correo, $contrasena);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);
$filas = mysqli_num_rows($resultado);

if ($filas == 1) {
    // Inicio de sesión exitoso
    header("location: index.html");
} else {
    // Inicio de sesión fallido
    header("location: login.php?error=1");
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>