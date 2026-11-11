<?php
session_start();

if(!isset($_SESSION["usuario_id"])) {
    header("Location: ./login.php");
    exit;
}

if($_SESSION["rol"] !== "admin") {
    header("Location: ./bienvenida.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ./admin.php");
    exit;
}

if(!isset($_POST["id"])) {
    header("Location: ./admin.php");
    exit;
}

$id = (int) $_POST["id"];

if($id <= 0 || $id == $_SESSION["usuario_id"]) {
    header("Location: ./admin.php");
    exit;
}

require_once '../Configuracion/conexion.php';

$sql = "UPDATE usuarios SET activo = 0 WHERE id = ? AND activo = 1";
$consulta = mysqli_prepare($conexion, $sql);

mysqli_stmt_bind_param($consulta,"i",$id);
mysqli_stmt_execute($consulta);

if(mysqli_stmt_affected_rows($consulta) > 0) {
    $_SESSION["mensaje_exito"] = "El usuario fue dado de baja correctamente.";
}

mysqli_stmt_close($consulta);

header("Location: ./admin.php");
exit;