<?php

$comando = "restart";

switch ($comando) {
    case "start":
        echo "Iniciando el servidor...";
        break;
    case "stop":
        echo "Deteniendo el servidor de forma segura...";
        break;
    case "restart":
        echo "Reiniciando los servicios, por favor espere...";
        break;
    default:
        echo "Comando no reconocido. Escribe un comando válido.";
        break;

}