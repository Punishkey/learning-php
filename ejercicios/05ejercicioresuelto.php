<?php

$nombre = "Carlos";

$profesion = "Informático";

$experiencia = 20;

$categoria = "";

if ($experiencia < 5) {
    $categoria = "Junior";
} elseif ($experiencia >= 5 && $experiencia <=15) {
    $categoria = "Especialista";
} elseif ($experiencia > 15) {
    $categoria = "Veterano";
}

echo $nombre . " es un " . $profesion . " con rango de " . $categoria;

