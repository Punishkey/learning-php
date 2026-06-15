<?php

/*
l bucle while (que significa "mientras") es muy sencillo: repite el código de su interior una y otra vez MIENTRAS la condición que tiene entre paréntesis sea verdadera.

Para usarlo bien, necesitas tres cosas:

    Una variable que sirva de contador (fuera del bucle).

    La condición (dentro del paréntesis).

    ¡Muy importante! Algo que cambie el contador dentro del bucle (un incremento). Si te olvidas de esto, el bucle será infinito y colgará el servidor.

PHP

<?php

$contador = 1;

while ($contador <= 5) {
    echo "Intento de conexión número: " . $contador . "<br>";
    
    // Incrementamos el contador en 1 para que en la siguiente vuelta valga más.
    // "$contador++" es lo mismo que escribir "$contador = $contador + 1"
    $contador++; 
}

*/

