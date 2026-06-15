<?php

$items = [
    "faros" => 4,
    "filtros" => 12,
    "espejos" => 100
];

foreach ($items as $objetos => $cantidad){
    echo "Producto: " . $objetos . " | " . "Stock: " . $cantidad . " unidades." . "<br>";
}