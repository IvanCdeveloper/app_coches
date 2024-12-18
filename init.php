<?php
// Cargar variables de entorno desde el archivo .env
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASSWORD') ?: '1234';
$db_name = getenv('DB_NAME') ?: 'concesionario';

try {
    // Conexión a la base de datos
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL para crear la tabla
    $sql = "
        CREATE TABLE IF NOT EXISTS coches (
            id INT AUTO_INCREMENT PRIMARY KEY,
            marca VARCHAR(255) NOT NULL,
            modelo VARCHAR(255) NOT NULL,
            color VARCHAR(255) NOT NULL,
            propietario VARCHAR(255) NOT NULL
        );
    ";

    // Ejecutar el SQL
    $pdo->exec($sql);
    echo "Tabla 'coches' creada exitosamente (si no existía ya).\n";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage() . "\n";
    exit(1);
}
