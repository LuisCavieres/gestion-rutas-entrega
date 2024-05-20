<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Nuevo Cliente</h1>
        <form action="guardar_cliente.php" method="POST">
            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="calle">Calle:</label>
            <input type="text" id="calle" name="calle">
            <label for="numero">Numero:</label>
            <input type="number" id="numero" name="numero">
            <label for="cpostal">Cod. Postal:</label>
            <input type="text" id="cpostal" name="cpostal">
            <label for="pais">Id País:</label>
            <input type="number" id="pais" name="pais">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo">
            <button type="submit">Guardar</button>
        </form>
        <a href="index.php">Volver a la Lista</a>
    </div>
</body>
</html>

