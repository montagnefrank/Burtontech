<?php

///////////////////////////////////////////////////////////////////////////////////////////DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
////////////////////////////////////////////////////////////////////////////////LOCAL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'vagrant');
define('DB_DATABASE', 'burtontech');

$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
mysqli_set_charset($link, "utf8");
if ($link->connect_error) {
    echo "No se puede establecer la conexión con la BDD Burtontech";
} 