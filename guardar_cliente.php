<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluir archivo de conexión

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

// Insertar datos en la tabla clientes
$sql = "INSERT INTO cliente (rut, nombre, apellido, calle, Numero_de_ubicacion, Codigo_postal, Pais_Id, Telefono, Correo_electronico)
        VALUES ('$rut', '$nombre', '$apellido', '$calle', '$numero',  '$cpostal', '$pais', '$telefono', '$correo')";

if ($conexion->query($sql) === TRUE) {
    echo "Cliente guardado exitosamente";
} else {
    echo "Error al guardar el cliente: " . $conexion->error;
}

echo '<br><a href="index.php" >Volver</a>';

// Cerrar conexión
$conexion->close();
?>

