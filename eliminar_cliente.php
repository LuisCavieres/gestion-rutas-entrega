<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluir archivo de conexión

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener ID del cliente a eliminar
$rut = $_GET['rut'];

// Eliminar cliente de la tabla clientes
$sql = "DELETE FROM Cliente WHERE RUT='" . $rut . "'";

if ($conexion->query($sql) === TRUE) {
    echo "Cliente eliminado exitosamente";
} else {
    echo "Error al eliminar el cliente: " . $conexion->error;
}

echo '<br><a href="index.php" >Volver</a>';

// Cerrar conexión
$conexion->close();
?>
