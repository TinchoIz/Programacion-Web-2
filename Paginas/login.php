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
        
        // comprobacion temploral
        // Despues buscar el usuario en MySQL y verificar contraseña con password_verfy()

            if (
                $usuario === $usuarioPrueba["usuario"] &&
                $password === $usuarioPrueba["password"]
            ) {
                session_regenerate_id(true);

                $_SESSION["usuario_id"] = $usuarioPrueba["id"];
                $_SESSION["usuario"] = $usuarioPrueba["usuario"];

                header("Location: ./bienvenida.php");
                exit;

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

         <section class="section-contacto">
        <form action="./login.php" method="post" class="formulario-contacto">
        
            <?php
            foreach($errores as $error) {
            echo "<p>" . htmlspecialchars($error) . "<p>";
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