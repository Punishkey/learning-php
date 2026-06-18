<?php

/*
1. El Método GET (Datos a la vista de todos)

El método GET envía la información escondida en la propia URL (dirección web) del navegador. Seguro que lo has visto mil veces al buscar en Google o navegar por tiendas online.

Si un usuario rellena un formulario con su nombre, la URL se transforma en algo como esto:
http://localhost/curso-php/index.php?nombre=Carlos&experiencia=20

    ¿Cómo la lee PHP? PHP tiene una supervariable automática (llamada array superglobal) lista para capturar esos datos: $_GET.

    Al ser un array asociativo, para leer el nombre del usuario solo tendrías que escribir: $_GET["nombre"].

    ¿Cuándo se usa? Para cosas que no sean secretas, como filtros de búsqueda, páginas de una lista (?pagina=3), o categorías de una tienda.

2. El Método POST (Datos invisibles y seguros)

El método POST envía la información por debajo, completamente oculta dentro de la petición web. La URL no cambia en absoluto.

    ¿Cómo la lee PHP? Usando la supervariable $_POST.

    Para leer el dato, se hace igual: $_POST["password"].

    ¿Cuándo se usa? Obligatorio para información sensible (contraseñas, tarjetas de crédito) o cuando el usuario va a enviar textos largos, subir archivos o crear registros en el sistema.

*/