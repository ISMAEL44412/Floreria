<?php

function database() : mysqli {
    $database = mysqli_connect("localhost", "root","root", "floreria", 3306);


    if(!$database) {
        echo "Error de conexión: " . mysqli_connect_error();
        exit;
    }

    return $database;
}

?>