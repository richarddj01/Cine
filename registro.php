<?php
include('conexion.php');

// Agarrar los datos del Input
$nombre = $_POST['nombre'];
$correo = $_POST['emai2'];
$contrasena = $_POST['contrasen'];
$telefono = $_POST['telefon'];

// Verificar si el correo electrónico ya existe en la base de datos
$sql = "SELECT correo FROM usuarios WHERE correo = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultado) > 0) {
  // El correo electrónico ya existe en la base de datos, mostrar mensaje de error
  echo "<script> alert('El correo ya existe'); window.location.href='registro2.php'; </script>";
} else {
  // El correo electrónico no existe en la base de datos, insertar los datos en la tabla "usuarios"
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
}

mysqli_close($conexion);
?>
