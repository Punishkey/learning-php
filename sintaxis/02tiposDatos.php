<?php

//tipos de datos
//1. numerico

$numero = 1;

//decimal

$decimal = 1.12;

//string
$nombre = "Carlos";

//booleano
$esFalso = false;

//null = vacío

$vacio = null;


//para saber que tipo de dato es una variable tenemos una instruccion llamada gettype

echo gettype($decimal);

//casting explicito. Para pasar una variable de un tipo a otro.



$numero = (int)"1";

echo gettype($numero);


//Existe una función interna en PHP que es como un "rayo X" para las variables. Se usa muchísimo para investigar qué está pasando dentro de tu código cuando algo no funciona.
//se llama var_dump() si escribimos:

var_dump($esFalso);

//nos dirá el tipo de dato y el valor y si es texto cuántos caracteres mide.

// Como el archivo es únicamente php es mejor omitir el cierre para evitar problemas con espacios en blanco invisibles.

?>