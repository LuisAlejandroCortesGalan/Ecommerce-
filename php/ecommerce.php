<?php

session_start();

require_once('connection.php');

echo "Hola".$_SESSION['nombre_cliente']." ".$_SESSION['apellido_cliente'];
;
