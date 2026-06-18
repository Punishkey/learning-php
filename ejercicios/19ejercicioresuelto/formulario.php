<?php

// 1. Recogemos el dato por POST. Si no han enviado nada aún, le asignamos texto vacío "".
$mensajeServidor = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si el usuario ha pulsado el botón, capturamos el campo "profesion" del formulario
    $profesionRecibida = $_POST["profesion"] ?? "";
    
    if ($profesionRecibida != "") {
        $mensajeServidor = "¡Interesante! El servidor ha registrado que trabajas como: " . $profesionRecibida;
    } else {
        $mensajeServidor = "Por favor, escribe algo en el cuadro de texto.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Primer Formulario PHP</title>
</head>
<body>

    <?php if ($mensajeServidor != ""): ?>
        <p style="color: blue; font-weight: bold;"><?php echo $mensajeServidor; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="profesion">Introduce tu profesión:</label>
        <input type="text" id="profesion" name="profesion">
        
        <button type="submit">Enviar al Servidor</button>
    </form>

</body>
</html>