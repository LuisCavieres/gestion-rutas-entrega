<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluir archivo de conexión

// Consulta para obtener todos los clientes
$sql = "SELECT * FROM cliente";
$result = $conexion->query($sql);

// Mostrar lista de clientes
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["RUT"] . " | " . $row["Nombre"] . " " . $row["Apellido"] . " | <a href='cargar_cliente.php?rut=" . $row["RUT"] . "'>Modificar</a> | <a href='eliminar_cliente.php?rut=" . $row["RUT"] . "'>Eliminar</a></li>";
    }
} else {
    echo "No hay clientes registrados";
}

// Cerrar conexión
$conexion->close();
?>
