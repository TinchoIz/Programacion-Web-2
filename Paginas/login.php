<?php
    session_start();

    if(isset($_SESSION["usuario_id"])) {
        header("Location: ./bienvenida.php");
        exit;
    }

    $errores = [];

    // temporal - cuenta para hacer pruebas
    $usuarioPrueba = [
        "id" => 1,
        "usuario" => "martin",
        "password" => "Jedi123"
    ];
    // -----

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if(isset($_POST["usuario"])) {
            $usuario = trim($_POST["usuario"]);

            if(empty($usuario)) {
                $errores[] = "El nombre de usuario no puede estar vacío.";
            }
        } else {
            $errores[] = "No se recibió el nombre de usuario.";
        }

        if(isset($_POST["password"])) {
            $password = $_POST["password"];

            if($password === "") {
                $errores[] = "La contraseña no puede estar vacía.";
            }
        } else {
            $errores[] = "No se recibio la contraseña.";
        }

        
        if (empty($errores)) {
        
        require_once '../Configuracion/conexion.php';

        $sql = "SELECT id, usuario, password, rol, activo FROM usuarios WHERE usuario = ?";

        $consulta = mysqli_prepare($conexion, $sql);

        mysqli_stmt_bind_param($consulta, "s", $usuario);
        mysqli_stmt_execute($consulta);

        $resultado = mysqli_stmt_get_result($consulta);
        $usuarioEncontrado = mysqli_fetch_assoc($resultado);

        mysqli_stmt_close($consulta);

        if($usuarioEncontrado) {
            if(password_verify($password, $usuarioEncontrado["password"])) {
                if($usuarioEncontrado["activo"] == 1) {
                    session_regenerate_id(true);

                    $_SESSION["usuario_id"] = $usuarioEncontrado["id"];
                    $_SESSION["usuario"] = $usuarioEncontrado["usuario"];
                    $_SESSION["rol"] = $usuarioEncontrado["rol"];

                    header("Location: ./bienvenida.php");
                    exit;

                } else {
                    $errores[] = "Tu cuenta esta desactivada.";
                }
            } else {
                $errores[] = "el usuario o la contraseña son incorrectos.";
            }
        } else {
            $errores[] = "El usuario o la contraseña son incorrectos.";
        }

            }
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
    

    <?php 
    include_once '../Componentes/header.php';
    ?>

    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">ACCESO AL CUARTEL GENERAL</h1>
            <p class="texto-introduccion-pagina">
               Ingresa tu usuario y contraseña para poder acceder.
            </p>
           
        </section>

        <?php
        if(isset($_SESSION["mensaje_exito"])){
            echo '<p class= "texto-introduccion-pagina">' . htmlspecialchars($_SESSION["mensaje_exito"]) . '</p>';
            
            unset($_SESSION["mensaje_exito"]);
        }
        ?>

         <section class="section-contacto">
        <form action="./login.php" method="post" class="formulario-contacto">
        
            <?php
            foreach($errores as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
            }
            ?>

            <div class="campo-formulario">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>

            <div class="campo-formulario">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="boton-contacto">Iniciar sesión</button>
        </form>

        </section>

    </main>

            <?php 
        include_once '../Componentes/footer.php';
    ?>

</body>
</html>