<?php
    session_start();

    $errores = [];

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST["usuario"])) {
            $usuario = trim($_POST["usuario"]);

            if($usuario === "") {
                $errores[] = "el nombre de usuario no puede estar vacío.";
            }elseif (strlen($usuario) > 50) {
                $errores[] = "El nombre de usuario no puede superar los 50 caracteres.";
            }
        }else {
            $errores[] = "No se recibió el nombre de usuario.";
        }
    
        if(isset($_POST["email"])){
            $email = trim($_POST["email"]);

            if($email === ""){
                $errores[] = "El correo electrónico no puede estar vacio.";
            
                } else if(strlen($email) > 150) {
                $errores[] = "El correo electrónico no puede superar los 120 caracteres.";

                } elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    $errores[] = "El correo electrónico no tiene un formato valido.";
                }
            } else {
                $errores[] = "No se recibio el correo electrónico.";
            }
            
            if(isset($_POST["password"])) {
                $password = $_POST["password"];

                if($password === "") {
                    $errores[] = "La contraseña no puede estar vacía.";
                }
            } else {
                $errores[] = "No se recibió la contraseña.";
            }

            if(empty($errores)){
                require_once '../Configuracion/conexion.php';
            
                $sql = "SELECT id FROM usuarios WHERE usuario = ?";
                $consulta = mysqli_prepare($conexion, $sql);

                mysqli_stmt_bind_param($consulta, "s", $usuario);
                mysqli_stmt_execute($consulta);
                mysqli_stmt_store_result($consulta);

                if(mysqli_stmt_num_rows($consulta) > 0) {
                    $errores[] = "El nombre de usuario ya esta registrado.";
                }
                mysqli_stmt_close($consulta);
            
                $sql = "SELECT id FROM usuarios WHERE email = ?";
                $consulta = mysqli_prepare($conexion, $sql);

                mysqli_stmt_bind_param($consulta, "s", $email);
                mysqli_stmt_execute($consulta);
                mysqli_stmt_store_result($consulta);

                if(mysqli_stmt_num_rows($consulta) > 0) {
                    $errores[] = "El correo electrónico ya esta registrado.";
                }
                mysqli_stmt_close($consulta);

                if(empty($errores)) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO usuarios(usuario, email, password) VALUES (?, ?, ?)";
                    $consulta = mysqli_prepare($conexion, $sql);

                    mysqli_stmt_bind_param($consulta, "sss", $usuario, $email, $passwordHash);
                    mysqli_stmt_execute($consulta);

                    mysqli_stmt_close($consulta);

                    $_SESSION["mensaje_exito"] = "Tu cuenta se creó correctamente. Ya podés iniciar sesión.";

                    header("Location: ./login.php");
                    exit;
                }
            }
    
        }    

?>
    
<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crear cuenta</title>
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
            <h1 class="titulo-introduccion-pagina">REGISTRATE PARA INGRESAR AL CUARTEL GENERAL</h1>
            <p class="texto-introduccion-pagina">
               Creá tu cuenta y sumate a nuestra comunidad de fans de Star Wars.
            </p>
           
        </section>

         <section class="section-contacto">
        <form action="./registro.php" method="post" class="formulario-contacto">
        
        <?php
        foreach ($errores as $error) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        }
        ?>

            <div class="campo-formulario">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" maxlength="150" required>
            </div>

            <div class="campo-formulario">
                <label for="email">Correo eletrónico</label>
                <input type="email" id="email" name="email" maxlength="120" required>
            </div>

            <div class="campo-formulario">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="boton-contacto">Crear cuenta</button>
        </form>

        </section>

    </main>

            <?php 
        include_once '../Componentes/footer.php';
    ?>

</body>
</html>