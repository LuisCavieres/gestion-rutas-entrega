<?php
// Conexión a la base de datos
include 'conexion.php'; // Incluir archivo de conexión

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener RUT del cliente a modificar
$rut = $_GET['rut'];

// Consulta para obtener datos del cliente
$sql = "SELECT * FROM cliente WHERE RUT='" . $rut . "'";
$result = $conexion->query($sql);

// Mostrar formulario para modificar cliente con datos cargados
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo "<form action='actualizar_cliente.php' method='POST'>";
    echo "<label for='rut'>RUT: </label>";
    echo "<a>" . $row["RUT"] . "</a><br><br>" ;
    echo "<input type='hidden' name='rut' value='" . $row["RUT"] . "'>" ;
    echo "<label for='nombre'>Nombre: </label>";
    echo "<input type='text' id='nombre' name='nombre' value='" . $row["Nombre"] . "' required><br><br>";
    echo "<label for='apellido'>Apellido: </label>";
    echo "<input type='text' id='apellido' name='apellido' value='" . $row["Apellido"] . "' required><br><br>";
    echo "<label for='calle'>Calle: </label>";
    echo "<input type='text' id='calle' name='calle' value='" . $row["Calle"] . "'><br><br>";

    echo "<label for='numero'>Numero: </label>";
    echo "<input type='text' id='numero' name='numero' value='" . $row["Numero_de_ubicacion"] . "'><br><br>";

    echo "<label for='cpostal'>Cod. Postal: </label>";
    echo "<input type='text' id='cpostal' name='cpostal' value='" . $row["Codigo_postal"] . "'><br><br>";

    echo "<label for='pais'>País: </label>";
    echo "<input type='text' id='pais' name='pais' value='" . $row["Pais_Id"] . "'><br><br>";
    
    
    echo "<label for='telefono'>Teléfono: </label>";
    echo "<input type='tel' id='telefono' name='telefono' value='" . $row["Telefono"] . "'><br><br>";
    echo "<label for='correo'>Correo: </label>";
    echo "<input type='email' id='correo' name='correo' value='" . $row["Correo_electronico"] . "'><br><br><br>";
    echo "<button type='submit'>Actualizar</button>";
    echo "</form>";
} else {
    echo "Cliente no encontrado";
}

    echo '<a href="index.php" >Volver a la Lista</a>';

// Cerrar conexión
$conexion->close();
?>
