<?php
$mysqli = new mysqli("localhost", "root", "root", "compustore");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "<script> console.log ('conectado al server') </script>";
}

?>