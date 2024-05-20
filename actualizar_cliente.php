<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluir archivo de conexión

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$cpostal = $_POST['cpostal'];
$pais = $_POST['pais'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

// Actualizar datos en la tabla clientes
$sql = "UPDATE Cliente SET Nombre='$nombre', Apellido='$apellido', Calle='$calle', Numero_de_ubicacion='$numero', Codigo_postal='$cpostal', Pais_Id='$pais', Telefono='$telefono', Correo_electronico='$correo' WHERE RUT='" . $rut . "'";

if ($conexion->query($sql) === TRUE) {
    echo "Cliente actualizado exitosamente";
} else {
    echo "Error al actualizar el cliente: " . $conexion->error;
}

echo '<br><a href="index.php" >Volver</a>';

// Cerrar conexión
$conexion->close();
?>
