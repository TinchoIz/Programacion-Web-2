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

if(!isset($_GET["id"])) {
    header("Location: ./admin.php");
    exit;
}

$id = (int) $_GET["id"];

if($id <= 0) {
    header("Location: ./admin.php");
    exit;
}

require_once '../Configuracion/conexion.php';

$sql = "SELECT id, usuario, email, rol, activo FROM usuarios WHERE id = ?";

$consulta = mysqli_prepare($conexion, $sql);

mysqli_stmt_bind_param($consulta, "i", $id);
mysqli_stmt_execute($consulta);

$resultado = mysqli_stmt_get_result($consulta);
$usuarioEditar = mysqli_fetch_assoc($resultado);

mysqli_stmt_close($consulta);

if(!$usuarioEditar) {
    header("Location: ./admin.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesión</title>
    <meta name="description"
        content="Acceso de usuarios a Star Wars Fan Page.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/contacto.css">
</head>
<body>

    <?php include_once '../Componentes/header.php'; ?>

    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">EDITAR USUARIO</h1>
            <p class="texto-introduccion-pagina">
               Modificá los datos de la cuenta seleccionada.
            </p>
           
        </section>

        <section class="section-contacto">
        <form action="./editar-usuario.php?id=<?php echo $id; ?>" method="post" class="formulario-contacto">
         
        <div class="campo-formulario">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" maxlength="50" 
                value="<?php echo htmlspecialchars($usuarioEditar["usuario"]); ?>" required>
            </div>

            <div class="campo-formulario">
                <label for="email">Correo eletrónico</label>
                <input type="email" id="email" name="email" maxlength="120" 
                value="<?php echo htmlspecialchars($usuarioEditar["email"]); ?>" required>
            </div>

            <button type="submit" class="boton-contacto">Guardar cambios</button>
        </form>
        </section>

    </main>

    <?php include_once '../Componentes/footer.php'; ?>

</body>
</html>