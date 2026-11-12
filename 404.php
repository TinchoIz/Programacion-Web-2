<?php
require_once __DIR__ . '/Configuracion/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Error 404 - Star Wars Fan Page</title>
    <meta name="description"
        content="Curiosidades y datos interesantes sobre la producción, los personajes y la historia del universo Star Wars.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= BASE_URL ?>/Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="<?= BASE_URL ?>/Estilos/general.css?v=2">
    <link rel="stylesheet" href="<?= BASE_URL ?>/Estilos/404.css">
</head>

<body class="body-error">
    
     <header class="header-principal header-error">
        <div class="contenedor-logo">
            <img src="<?= BASE_URL ?>/Recursos/Imagenes/StarWars.png" alt="Star Wars">
            <h1>Star Wars Fan Page</h1>
        </div>
    </header>


 <main class="main-error">
        <section class="section-error">
            <img src="<?= BASE_URL ?>/Recursos/Imagenes/404ErrorFinal.png" alt="imagen de error 404" class="imagen-error">

            <div class="contenedor-texto-error">
                <h1 class="titulo-error">404</h1>
                <h2 class="subtitulo-error">La señal se perdió en una galaxia muy, muy lejana...</h2>
                <p class="texto-error">
                    Lo sentimos, tuvimos un problema y no pudimos encontrar la página que estabas buscando.
                </p>

                <a href="<?= BASE_URL ?>/index.php" class="boton-error">Volver al inicio</a>
            </div>
        </section>
    </main>

        <footer class="footer-principal footer-error">
        <section>
            <p class="footer-copy">© 2026 Star Wars Fan Page</p>
        </section>
    </footer>

</body>

</html>