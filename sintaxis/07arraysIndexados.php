<?php

/*
Como te adelanté antes (y ahora sí que toca), en el mundo real no podemos trabajar solo con variables individuales. Si tienes una lista de servicios en un servidor, un inventario de ítems o las marcas de coches que estás revisando, crear una variable para cada uno sería una locura.

Para eso inventaron los Arrays (matrices o arreglos): una variable especial que funciona como una caja con compartimentos donde puedes guardar una lista de datos.
Paso 1: Arrays Indexados (Listas ordenadas por números)

En este tipo de array, PHP mete cada dato en un "cajón" y le asigna automáticamente un número de posición (llamado índice).

    ⚠️ Regla de oro de la informática: El primer cajón de la lista SIEMPRE es el número 0. El segundo es el 1, el tercero el 2, etc.

Mira cómo se escribe en PHP:

<?php

// Así se crea una lista de sistemas operativos
$sistemas = ["Ubuntu", "Debian", "Windows Server"];

// Para mostrar uno en concreto, pones el nombre del array y su número entre corchetes:
echo "El sistema principal es: " . $sistemas[0]; // Imprime: Ubuntu
echo "El sistema secundario es: " . $sistemas[2]; // Imprime: Windows Server

Si quisieras cambiar el valor de un cajón específico más adelante en tu código, se hace apuntando directamente a su número:
PHP

$sistemas[1] = "CentOS"; // Esto cambia "Debian" por "CentOS"

*/