<?php

/*
Las condicionales permiten que tu código tome decisiones. Es como un árbol de decisiones: "Si pasa esto, haz A; si no, haz B".

La estructura en PHP se escribe así:

<?php

$experiencia = 20;

if ($experiencia >= 10) {
    // Este código se ejecuta SOLO si la condición de arriba es VERDADERA
    echo "Eres un profesional senior.";
} else {
    // Este código se ejecuta SOLO si la condición de arriba es FALSA
    echo "Eres un profesional junior o mid-level.";
}

Si tuviéramos más de dos opciones, podemos usar elseif:


<?php

$experiencia = 20;

if ($experiencia < 2) {
    echo "Junior";
} elseif ($experiencia >= 2 && $experiencia < 8) {
    // El operador "&&" significa "Y" (se tienen que cumplir ambas condiciones)
    echo "Mid-level";
} else {
    echo "Senior";
}

*/