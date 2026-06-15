<?php

/*
La función que acabas de escribir hace su trabajo y directamente "escupe" el resultado en la pantalla con un echo. Esto está bien para scripts sencillos, pero en el mundo real, a menudo no queremos que la función pinte nada en la pantalla todavía. Lo que queremos es que haga el cálculo en la sombra y nos devuelva el resultado para que podamos guardarlo en otra variable o usarlo en un if.

Para lograr esto, se utiliza la palabra clave return (devolver). Cuando una función llega a un return, calcula el valor, te lo entrega y se detiene inmediatamente.

Mira la diferencia:

<?php

// Esta función NO pinta nada en pantalla, solo calcula y DEVUELVE el dato
function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado; 
}

// Para usar el resultado de una función con return, debemos guardarlo en una variable:
$totalSuma = sumar(10, 5);

// Ahora que el valor está en $totalSuma, podemos hacer lo que queramos:
echo "El total es: " . $totalSuma;

*/