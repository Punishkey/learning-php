<?php

$servicios = ["Apache", "MySQL", "SSH", "FTP"];

$servicios[1] = "MariaDB";

echo "El servidor web usa " . $servicios[0] . " y el motor de base de datos es " . $servicios[1] . ".";