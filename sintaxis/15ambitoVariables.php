<?php

/*
Esto es un concepto vital para no volverte loco con los errores. Las variables que creas dentro de una función solo existen DENTRO de esa función. Se llaman variables locales.

<?php

function probarScope() {
    $textoInterno = "Solo existo dentro de la función";
}

probarScope();

// ¡ERROR! PHP dirá "Undefined variable" porque desde fuera de la función 
// no se puede ver lo que hay encerrado dentro de sus llaves.
echo $textoInterno;

*/