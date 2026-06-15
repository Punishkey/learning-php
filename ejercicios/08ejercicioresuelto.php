<?php

$config = [
    "nombre_sitio" => "Mi Servidor Medieval",
    "version_php" => "8.3",
    "mantenimiento" => true
];

$config["mantenimiento"] = false;

echo "El sitio " . $config["nombre_sitio"] . " corre bajo la versión PHP " . $config["version_php"] . ".";