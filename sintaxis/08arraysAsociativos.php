<?php

/*
En el array indexado que acabas de hacer, los cajones se guardan con números (0, 1, 2...). Esto está bien para listas simples, pero si quieres guardar los datos de configuración de un servidor, acordarte de qué iba en el número 0 o en el número 5 puede ser un caos.

Para solucionar esto existen los Arrays Asociativos. En lugar de usar números automáticos, tú eliges el nombre (clave o key) de cada cajón.

Para relacionar una clave con su valor, PHP utiliza el símbolo del "operador de flecha" (=>).
Ejemplo práctico de configuración:
PHP

<?php

// Guardamos los datos de un servidor de bases de datos
$configBD = [
    "host" => "localhost",
    "usuario" => "root",
    "password" => "123456",
    "puerto" => 3306
];

// Para acceder, ya no usamos números. Usamos el nombre de la clave:
echo "Nos conectamos a: " . $configBD["host"]; // Imprime: localhost
echo "<br>";
echo "El puerto de escucha es el: " . $configBD["puerto"]; // Imprime: 3306

Si quisieras modificar un valor más adelante, se hace exactamente igual que con los indexados, pero usando la clave de texto:
PHP

$configBD["password"] = "nueva_clave_segura";

*/

