<?php


function debuguear(mixed $variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function isAuth() {
    session_start();
    if(empty($_SESSION)) {
        header("Location: /login.php");
        exit;
    } 
}