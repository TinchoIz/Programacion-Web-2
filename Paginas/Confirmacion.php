<?php

$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// nombre
    if (isset($_POST["nombre"])) {
        $nombre = trim($_POST["nombre"]);

        if (empty($nombre)){
        $errores[] = "El nombre no puede estar vacío.";
    }

        elseif (strlen($nombre) < 2 ){
        $errores[] = "El nombre debe tener al menos 2 caracteres.";
    }

    }   else {
        $errores[] = "No se recibió el nombre.";
    }
//apellido
    if (isset($_POST["apellido"])) {
        $apellido = trim($_POST["apellido"]);

        if (empty($apellido)) {
            $errores[] = "El apellido no puede estar vacío.";
        }

        elseif (strlen($apellido) < 2) {
            $errores [] = "El apellido debe tener al menos 2 caracteres.";

        }

    } else {
        $errores[] = "No se recibió el apellido.";
    }
//email
    if (isset($_POST["email"])) {
        $email = trim($_POST["email"]);

        if(empty($email)) {
            $errores[] = "El correo electrónico no puede estar vacío.";
        
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errores[] = "El correo electrónico no tiene un formato válido.";
        }

    } else {
        $errores[] = "No se recibió el correo electrónico.";
    }
//motivo
    if (isset($_POST["motivo"])) {
        $motivo = trim($_POST["motivo"]);

        if (empty($motivo)) {
        $errores[] = "Tenés que seleccionar un motivo de contacto.";
        }

        elseif (
                $motivo != "consulta" &&
                $motivo != "sugerencia" &&
                $motivo != "error" &&
                $motivo != "otro"
        
        ) {
        $errores[] = "El motivo de contacto seleccionado no es válido.";
        }
    
    } else {
        $errores[] = "No se recibió el motivo de contacto.";
    }    
//mensaje
    if (isset($_POST["mensaje"])) {
        $mensaje = trim($_POST["mensaje"]);

        if (empty($mensaje)) {
            $errores[] = "El mensaje no puede estar vacío.";
    
        } elseif (strlen($mensaje) < 5) {
            $errores[] = "El mensaje debe tener al menos 5 caracteres.";
            
        } elseif (strlen($mensaje) > 500) {
            $errores[] = "El mensaje no puede superar los 500 caracteres.";
        }
        
    } else {
        $errores[] = "No se recibió el mensaje.";
    }

} else {
    $errores[] = "Para enviar una consulta, completá el formulario de contacto.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mensaje enviado - Star Wars Fan Page</title>
    <meta name="description" content="Página de confirmación del formulario de contacto de Star Wars Fan Page.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/confirmacion.css">
</head>

<body>

    <?php 
    include_once '../Componentes/header.php';
    ?>

    <main class="main-confirmacion">
        <section class="section-confirmacion">

        <?php
        if (!empty($errores)){
        ?>
            <h1 class= "titulo-confirmacion">Revisá tu consulta</h1>

            <?php
            foreach ($errores as $error) {
            ?>
            
                <p class="texto-confirmacion">
                    <?php echo $error; ?>
                </p>     
            <?php
            }
            ?>

            <a href="./contacto.php" class="boton-confirmacion">
                Volver al formulario
            </a>
            
            <?php
        } else {
            ?>

            <h1 class="titulo-confirmacion">Mensaje enviado</h1>

            <p class="texto-confirmacion">
                Hola, <?php echo htmlspecialchars ($nombre); ?>
                <?php echo htmlspecialchars ($apellido); ?>! 
                Tu mensaje fue enviado correctamente al Consejo Jedi. La Fuerza acompaña tu
                consulta.
            </p>

            <p class="texto-confirmacion">
                Gracias por contactar con Star Wars Fan Page. Pronto una señal rebelde llegará con novedades.
            </p>

            <p class="texto-confirmacion">
                El correo electrónico que indicaste para tu consulta es:
            <?php echo htmlspecialchars($email); ?>.
            </p>

            <p class="texto-confirmacion">
            <?php

            if($motivo == "consulta") {
                echo "Recibimos tu consulta general sobre el universo Star Wars.";
            
                } elseif ($motivo == "sugerencia") {
                    echo "Gracias por sugerir nuevo contenido para nuestra comunidad.";
                
                } elseif ($motivo == "error") {
                    echo "Gracias por avisarnos sobre un error en el sitio. Seguramente es el Imperio atacando nuestros sistemas, vamos a revisarlo.";

                } else {
                    echo "Recibimos tu mensaje para que lo evalue Consejo Jedi.";
                }
                ?>  

            </p>
            
            <p class="texto-confirmacion">
                Tu mensaje:
                <?php echo htmlspecialchars($mensaje); ?>
            </p>    

            <a href="../index.php" class="boton-confirmacion">Volver al inicio</a>

            

        <?php
        }
        ?>
        </section>


    </main>

    <?php 
    include_once '../Componentes/footer.php';
    ?>

</body>

</html>