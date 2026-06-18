<?php

require "utilidades.php";

$misAnios = calcularAntiguedad(2026, 2006);

if ($misAnios >= 15) {
    echo "Tienes perfil Senior. Años: " . $misAnios;
} else {
    echo "Perfil en desarrollo. Años: " . $misAnios;
}

