<?php

include('conexion.php');

// Agarra los datos del Input
$nombre = $_POST['nombre'];
$correo = $_POST['emai2'];
$contrasena = $_POST['contrasen'];
$telefono = $_POST['telefon'];


// Insertar los datos en la tabla "usuarios"
$sql = "INSERT INTO usuarios (nombre, correo, contrasena, telefono) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $contrasena, $telefono);

if (mysqli_stmt_execute($stmt)) {
  header("Location: index.html");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>