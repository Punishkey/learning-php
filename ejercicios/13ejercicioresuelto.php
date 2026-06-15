<?php

function calcularAntiguedad($actual, $inicio) {
    $anios = $actual - $inicio;
    echo "La antigüedad acumulada en el sector es de: " . $anios . " años.";
}

calcularAntiguedad(2026, 2006);