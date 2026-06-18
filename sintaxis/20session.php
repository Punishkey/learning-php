<?php

/*

El protocolo de las páginas web tiene una peculiaridad: no tiene memoria. Cada vez que recargas la página o navegas a otra, el servidor "olvida" por completo quién eres. No sabe si acabas de rellenar el formulario o si ya te habías logueado.

Para solucionar esto existen las Sesiones ($_SESSION). Una sesión permite almacenar variables en el servidor que se mantienen vivas mientras el usuario navega por diferentes archivos de tu web, hasta que cierra el navegador o cierra sesión.

Para usar las sesiones, hay una regla de oro inquebrantable: tienes que activar el motor de sesiones en la primerísima línea de tu código usando la función session_start();

*/