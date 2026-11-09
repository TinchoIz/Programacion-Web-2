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

require_once '../Configuracion/conexion.php';

$sql = "SELECT id, usuario, email, rol, activo FROM usuarios ORDER BY id";
$consulta = mysqli_prepare($conexion, $sql);

mysqli_stmt_execute($consulta);
$resultado = mysqli_stmt_get_result($consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administración - Star Wars Fan Page</title>
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/admin.css">
</head>
<body>

    <?php include_once '../Componentes/header.php'; ?>

    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">
                PANEL DE ADMINISTRACIÓN
            </h1>

            <p class="texto-introduccion-pagina">
                Administra a los usuarios de la pagina.
            </p>

        </section>

        <section class="section-administracion"> 
        <h2>Usuarios registrados</h2>
        
        <table class="tabla-usuarios">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Correo electrónico</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            
            <tbody>
                <?php

                while($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fila["usuario"]); ?></td>
                        <td><?php echo htmlspecialchars($fila["email"]); ?></td>
                        <td><?php echo htmlspecialchars($fila["rol"]); ?></td>

                        <td>
                            <?php
                            if($fila["activo"] == 1) {
                                echo "Activo";
                            
                                } else {
                                    echo "Inactivo";
                                }
                                ?>
                        </td>
                                <td>
                                    <a href="./editar-usuario.php?id=<?php echo (int)$fila["id"]; ?>">Editar</a>
                                </td>
                    </tr>
                    <?php    
                }
                mysqli_stmt_close($consulta);
                ?>

            </tbody>
        </table>

        </section>
    </main>

    <?php include_once '../Componentes/footer.php'; ?>

</body>
</html>