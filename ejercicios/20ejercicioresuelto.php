<?php

// ¡REGLA DE ORO! Iniciamos el motor de sesiones antes de cualquier otra cosa
session_start();

// 1. Si el usuario viene del formulario POST, guardamos su nombre en la SESIÓN
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioFormulario = $_POST["usuario"] ?? "";
    
    if ($usuarioFormulario != "") {
        // Guardamos el nombre en el "cajón" de la sesión del servidor
        $_SESSION["usuario_logueado"] = $usuarioFormulario;
    }
}

// 2. Recuperamos el usuario de la sesión (si es que existe). Si no, queda vacío.
$usuarioActual = $_SESSION["usuario_logueado"] ?? "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Control de Sesiones</title>
</head>
<body>

    <?php if ($usuarioActual != ""): ?>
        <h1>Bienvenido de nuevo, <?php echo $usuarioActual; ?> 👋</h1>
        <p>El servidor te recuerda aunque recargues la página.</p>
        
        <p><a href="?accion=salir">Cerrar Sesión</a></p>
    <?php else: ?>
        <h1>Iniciar Sesión en el Servidor</h1>
        <form action="" method="POST">
            <label>Escribe tu nombre:</label>
            <input type="text" name="usuario" required>
            <button type="submit">Entrar</button>
        </form>
    <?php endif; ?>

    <?php
    // Código extra: Si el usuario hace clic en "Cerrar Sesión", destruimos la sesión
    if (($_GET["accion"] ?? "") == "salir") {
        session_destroy(); // Borra la sesión en el servidor
        header("Location: 20ejercicioresuelto.php"); // Recarga la página limpia
        exit();
    }
    ?>

</body>
</html>