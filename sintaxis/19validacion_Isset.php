<?php

/*
Para comprobar si una variable o una clave de un array existe y no es nula, PHP tiene la función estrella isset() (que significa "¿está configurada?"). Devuelve true o false.

Podríamos controlarlo con un if/else, pero la forma moderna y profesional de hacerlo en PHP para limpiar datos de formularios o URLs es el Operador de Fusión Nula (??). Es un atajo comodísimo.

Mira cómo funciona:


<?php

// El operador "??" dice: "Si existe $_GET['usuario'], guárdalo. Si no existe, guarda 'Invitado'".
$nombreRecibido = $_GET["usuario"] ?? "Invitado";

echo "¡Hola! Bienvenido, " . $nombreRecibido;

Si aplicas esto, cuando entres a receptor.php a secas pondrá "¡Hola! Bienvenido, Invitado", y si pones ?usuario=Carlos pondrá "¡Hola! Bienvenido, Carlos". ¡Cero errores en pantalla!

*/