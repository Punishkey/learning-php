<?php

/*
Aunque en PHP existen varios tipos de bucles (como for o while), hay uno diseñado exclusivamente para los arrays: el foreach (que significa literalmente "por cada uno").

El foreach agarra un array, lo recorre de arriba a abajo automáticamente, y en cada vuelta te da el elemento para que hagas lo que quieras con él.
Ejemplo 1: Recorrer un Array Indexado (Lista simple)
PHP

<?php
$plugins = ["Nexo", "MythicMobs", "BetonQuest"];

// "Por cada $plugins que encuentres, llámalo individualmente $plugin en esta vuelta"
foreach ($plugins as $plugin) {
    echo "Plugin cargado: " . $plugin . "<br>";
}

Resultado en pantalla:

    Plugin cargado: Nexo

    Plugin cargado: MythicMobs

    Plugin cargado: BetonQuest

Ejemplo 2: Recorrer un Array Asociativo (Con Clave y Valor)

Si tu array tiene nombres en los cajones, el foreach te permite sacar tanto el nombre del cajón como lo que hay dentro usando una sintaxis especial: $array as $clave => $valor.
PHP

<?php
$hardware = [
    "Placa Base" => "ASUS B450",
    "Procesador" => "Ryzen 7",
    "Gráfica" => "RTX 3060"
];

// "Por cada elemento, sácame su $componente (clave) y su $modelo (valor)"
foreach ($hardware as $componente => $modelo) {
    echo "El componente " . $componente . " es del modelo: " . $modelo . "<br>";
}

Resultado en pantalla:

    El componente Placa Base es del modelo: ASUS B450

    El componente Procesador es del modelo: Ryzen 7

    El componente Gráfica es del modelo: RTX 3060


*/