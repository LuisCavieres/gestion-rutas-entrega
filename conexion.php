<?php
$servername = "localhost";
$username = "justicia";
$password = "paratodos";
$dbname = "DBJusticia";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
