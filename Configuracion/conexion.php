<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$baseDatos = "holocron";

try{
    $conexion = mysqli_connect($host, $user, $pass, $baseDatos);

    mysqli_set_charset($conexion, "utf8mb4");

}catch (mysqli_sql_exception $error) {
    exit("No se pudo conectar con la base de datos.");

}


