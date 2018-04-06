<?php
require_once 'conexion_mysqli.php';

$var_nombre = $_POST['tb-nombre'];
$var_apellidos = $_POST['tb-apellidos'];
$var_username = $_POST['tb-username'];
$var_email = $_POST['tb-mail'];
$var_password = $_POST['tb-password'];



$sql = "INSERT INTO user  (nombre, apellidos, username, email, password)
VALUES ('$var_nombre', '$var_apellidos', '$var_username', '$var_email','$var_password')";

if ($mysqli->query($sql) === TRUE) {
    echo "<script> alert ('Gracias por registrarse, las buenas compras comienzan aquí') </script>";
    echo "<script> window.location='../index.php';</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

mysqli_close($mysqli);
?>