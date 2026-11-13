<?php

require_once __DIR__ . '/config.php';

if($esLocal){
$host = "127.0.0.1";
$user = "root";
$pass = "";
$baseDatos = "holocron";

} else {
$host = "sql308.infinityfree.com";
$user = "if0_43330111";
$pass = "CONTRASEÑA_DEL_HOSTING"; //
$baseDatos = "if0_43330111_holocron";

}

try{
    $conexion = mysqli_connect($host, $user, $pass, $baseDatos);

    mysqli_set_charset($conexion, "utf8mb4");

}catch (mysqli_sql_exception $error) {
    exit("No se pudo conectar con la base de datos.");

}


