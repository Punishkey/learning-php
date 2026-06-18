<?php

/*

Vamos a crear un único archivo llamado formulario.php. Sí, puedes mezclar HTML y PHP en el mismo archivo para hacer interfaces interactivas. Copia y completa este código:
PHP

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

Lo que tienes que hacer:

    Monta este archivo formulario.php en tu entorno local.

    Ábrelo en el navegador, escribe tu profesión en el cuadro y dale al botón de enviar.

    Observa cómo la URL no cambia para nada (porque es POST), pero el bloque PHP de arriba procesa el texto y te lo devuelve pintado en azul en la interfaz HTML.

*/