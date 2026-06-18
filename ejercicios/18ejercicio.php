<?php

/*
Vamos a experimentar con GET directamente en tu navegador sin necesidad de crear un formulario todavía, para que veas cómo PHP "escucha" la URL.

Crea un archivo llamado receptor.php y escribe lo siguiente:

<?php

// 1. Capturamos lo que venga en la URL bajo el nombre "usuario"
$nombreRecibido = $_GET["usuario"];

// 2. Lo pintamos en pantalla
echo "¡Hola! El servidor PHP ha recibido el nombre: " . $nombreRecibido;

El ejercicio consiste en lo siguiente:

    Guarda el archivo y ábrelo en tu navegador normalmente (http://localhost/curso-php/receptor.php). Verás que te da un aviso de que no encuentra la variable (es normal, la URL está vacía).

    Ahora, haz clic en la barra de direcciones de tu navegador, vete al final de la URL y escribe exactamente esto: ?usuario=Carlos (quedando así: http://localhost/curso-php/receptor.php?usuario=Carlos) y dale al Enter.

    Prueba a cambiar "Carlos" en la URL por cualquier otra palabra y dale a Enter de nuevo.

*/