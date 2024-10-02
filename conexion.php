<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'guimarbot';

try {
    // Crear conexión
    $conexion = new mysqli($servername, $username, $password, $database);

    // Comprobar conexión
    if ($conexion->connect_error) {
        throw new Exception("Conexión fallida: " . $conexion->connect_error);
    }
    echo "Conectado exitosamente";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}	 
?>