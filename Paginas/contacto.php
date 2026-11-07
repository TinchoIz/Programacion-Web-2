<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    <meta name="description"
        content="Página de contacto de Star Wars Fan Page para enviar consultas, sugerencias o mensajes sobre el universo Star Wars.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/contacto.css">
</head>
<body>
    

    <?php 
    include_once '../Componentes/header.php';
    ?>

        <section class="section-audio-sitio">
    <aside class="tarjeta-audio">
        <h2>Ambientá tu recorrido</h2>
        <p>Activá el audio para acompañar esta sección.</p>

        <audio controls class="reproductor-audio">
            <source src="../Recursos/Audio/Duel of the Fates.mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </aside>
</section>

    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">CONTACTO</h1>
            <p class="texto-introduccion-pagina">
               ¿Tenés alguna consulta, sugerencia o mensaje para compartir? Completá el formulario y enviá tu mensaje al Cuartel General.
            </p>
           
        </section>

         <section class="section-contacto">
        <form action="./Confirmacion.php" method="post" class="formulario-contacto">

            <div class="campo-formulario">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre"  minlength="2" maxlength="40"  required>
            </div>

            <div class="campo-formulario">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido"  minlength="2" maxlength="40"  required>
            </div>

            <div class="campo-formulario">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>

            <fieldset class="campo-formulario grupo-motivo">
                <legend>Motivo de contacto</legend>

                <label>
                    <input type="radio" name="motivo" value="consulta" required>
                    Consulta general
                </label>

                <label>
                    <input type="radio" name="motivo" value="sugerencia">
                    Sugerencia de contenido
                </label>

                <label>
                    <input type="radio" name="motivo" value="error">
                    Error en el sitio
                </label>

                <label>
                    <input type="radio" name="motivo" value="otro">
                    Otro
                </label>
            </fieldset>

            <div class="campo-formulario">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="6"  minlength="5" maxlength="500" required></textarea>
            </div>

            <button type="submit" class="boton-contacto">Enviar mensaje</button>

        </form>
    </section>

</main>

        <?php 
    include_once '../Componentes/footer.php';
    ?>

</body>
</html>