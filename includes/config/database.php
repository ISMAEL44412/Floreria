<?php
require_once __DIR__ . "/../funciones.php";


function database(): mysqli
{
    $database = new mysqli("localhost", "root", "root", "floreria", 3306);


    if ($database->connect_errno) {
        die("Error de conexión: " . $database->connect_error);
    }


    return $database;
}
