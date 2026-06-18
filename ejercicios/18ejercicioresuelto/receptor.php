<?php


// 1. Capturamos lo que venga en la URL bajo el nombre "usuario"
$nombreRecibido = $_GET["usuario"];

// 2. Lo pintamos en pantalla
echo "¡Hola! El servidor PHP ha recibido el nombre: " . $nombreRecibido;

