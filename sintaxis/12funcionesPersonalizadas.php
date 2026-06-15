<?php

/*
Una función es como una "máquina personalizada" que construyes una sola vez, le pones un nombre y puedes activarla (llamarla) todas las veces que quieras desde cualquier parte de tu código.

Para declarar una función se usa la palabra reservada function. Mira este ejemplo básico:
PHP

<?php

// 1. Construimos la máquina (Definición de la función)
function darBienvenida() {
    echo "¡Bienvenido al sistema de administración!<br>";
    echo "Cargando módulos de seguridad... OK.<br>";
}

// 2. Usamos la máquina (Llamada a la función)
darBienvenida(); 

// ... podemos hacer otras cosas en el código ...

darBienvenida(); // Podemos volver a usarla cuando queramos

*/