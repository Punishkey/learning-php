<?php

/*
El if/else es perfecto cuando tienes que evaluar rangos numéricos o condiciones complejas (como las que acabas de hacer). Pero, ¿qué pasa si lo único que quieres es evaluar si una
variable toma valores fijos específicos?

Imagina que estás programando el mantenimiento de un vehículo y, según el tipo de coche, necesitas asignar una tarea diferente. Podrías usar un if, pero un switch queda mucho más 
limpio y ordenado.
Ejemplo práctico de switch:


<?php

$tipoVehiculo = "Monovolumen"; // Puede ser: Compacto, Monovolumen, SUV...

switch ($tipoVehiculo) {
    case "Compacto":
        echo "Revisar presión de neumáticos estándar.";
        break;
        
    case "Monovolumen":
        echo "Revisar amortiguación trasera y sensor de aparcamiento.";
        break;
        
    case "SUV":
        echo "Comprobar tracción a las cuatro ruedas.";
        break;
        
    default:
        echo "Vehículo no reconocido. Realizar inspección general.";
        break;
}


¿Cómo funciona el switch?

    Evalúa la variable que pones entre paréntesis: switch ($tipoVehiculo).

    Va saltando de case (caso) en case buscando el que coincida con el valor.

    break;: Es obligatorio al final de cada caso. Si lo olvidas, PHP seguirá ejecutando los casos de abajo aunque no coincidan.

    default:: Es el "comodín". Si el coche no es ni Compacto, ni Monovolumen, ni SUV, saltará aquí automáticamente (es como el else final).

    En el default no es estrictamente obligatorio el break porque es el último, pero muchos programadores lo ponen por simetría.
*/


