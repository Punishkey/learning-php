<?php

/*
La función de arriba siempre hace lo mismo. Pero las funciones se vuelven realmente útiles cuando les pasas datos entre los paréntesis para que trabajen con ellos. Esos datos que recibe la función se llaman parámetros o argumentos.
PHP

<?php

// Definimos la función indicando que necesita recibir un dato (lo guardará en $nombreUsuario)
function saludarUsuario($nombreUsuario) {
    echo "Hola, " . $nombreUsuario . ". Has iniciado sesión correctamente.<br>";
}

// Al llamar a la función, le metemos el dato real dentro del paréntesis
saludarUsuario("Carlos");
saludarUsuario("Andrés");

*/