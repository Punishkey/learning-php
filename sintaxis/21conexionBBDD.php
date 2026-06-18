<?php

/*

Para conectarnos, necesitamos crear un "objeto PDO" pasándole una cadena de conexión (llamada DSN), el usuario y la contraseña de tu MySQL/MariaDB local.

Como la conexión puede fallar (porque el servidor de bases de datos esté apagado, por ejemplo), siempre se envuelve dentro de una estructura de control de errores llamada try / catch ("intenta esto / si falla, captura el error").

Mira cómo se estructura el archivo conexion.php:

<?php

$host = "localhost";
$db   = "mi_servidor"; // El nombre de la base de datos
$user = "root";        // Usuario por defecto en entornos locales
$pass = "";            // Contraseña (vacía por defecto en XAMPP)
$charset = "utf8mb4";  // Para soportar eñes, acentos y emojis

// Configuramos la cadena de conexión DSN
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    // Intentamos crear la conexión
    $pdo = new PDO($dsn, $user, $pass);
    
    // Le decimos a PDO que si encuentra un error, lance una excepción detallada
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexión establecida con éxito al motor de base de datos. 🚀";
} catch (PDOException $e) {
    // Si algo falla, el flujo salta aquí y te dice exactamente qué ha pasado
    echo "Error crítico en la conexión: " . $e->getMessage();
}


*/

