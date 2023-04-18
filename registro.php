<?php
include('conexion.php');

// Agarrar los datos del Input
$nombre = trim($_POST['nombre']);
$correo = trim($_POST['emai2']);
$contrasena = trim($_POST['contrasen']);
$telefono = trim($_POST['telefon']);

// Validar que no haya campos vacíos
if (empty($nombre) || empty($correo) || empty($contrasena) || empty($telefono)) {
  echo "<script> alert('Por favor, llene todos los campos'); window.location.href='registro2.php'; </script>";
  exit();
}

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
  // Validar la contraseña
  if (strlen($contrasena) < 8) {
    echo "<script> alert('La contraseña debe tener al menos 8 caracteres'); window.location.href='registro2.php'; </script>";
    exit();
  }

  if (!preg_match('/[a-z]/', $contrasena) || !preg_match('/[A-Z]/', $contrasena) || !preg_match('/[0-9]/', $contrasena)) {
    echo "<script> alert('La contraseña debe contener letras mayúsculas, minúsculas y números'); window.location.href='registro2.php'; </script>";
    exit();
  }

  // El correo electrónico no existe en la base de datos y la contraseña es válida, insertar los datos en la tabla "usuarios"
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
