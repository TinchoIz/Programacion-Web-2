<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Star Wars Fan Page</title>
    <meta name="description"
        content="Fan page de Star Wars con acceso a secciones sobre películas, series, reparto, curiosidades, detrás de escena y videojuegos.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="./Estilos/general.css?v=2">
    <link rel="stylesheet" href="./Estilos/home.css">
</head>

<body>


    <?php 
    include_once './Componentes/header.php';
    ?>

 <section class="section-audio-sitio">
    <aside class="tarjeta-audio">
        <h2>Ambientá tu recorrido</h2>
        <p>Activá el audio para acompañar esta sección.</p>

        <audio controls class="reproductor-audio">
            <source src="./Recursos/Audio/Main Theme.mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </aside>
</section>

    <main>
        <section class="section-presentacion-home">
            <h2>Había una vez en una página muy lejana...</h2>
            <h3>Bienvenidos al fan page de Star Wars</h3>
            <p>
                Un recorrido por el universo de Star Wars: Películas, Series, Personajes, Producción,
                curiosidades y momentos destacados.
            </p>
        </section>

        <section class="seccion-articulos-home">
            <h2 class="titulo-seccion-home">EXPLORA EL UNIVERSO</h2>

            <?php
            $articulosHome = [
                [
                    "imagen" => "./Recursos/Imagenes/universo-home.jpg",
                    "alt" => "Universo cinematográfico",
                    "titulo" => "Universo Cinematográfico",
                    "texto" => "Si sos nuevo en el universo de Star Wars y no sabés por dónde empezar, o sos un fan
                            apasionado que quiere ponerse al día con todas las producciones, esta sección es para vos.
                            Acá vas a encontrar una guía completa del universo cinematográfico, con el orden de las
                            películas y series para que puedas recorrer la saga de la mejor manera.",
                    "enlace" => "./Paginas/UniversoCinematografico.php",
                    "destacado" => true
                ],
                [
                    "imagen" => "./Recursos/Imagenes/reparto-home.jpg",
                    "alt" => "imagen-articulo-home",
                    "titulo" => "Reparto",
                    "texto" => "El universo cinematográfico de Star Wars comenzó el 25 de mayo de 1977 y, a lo largo de los
                            años, una gran cantidad de actores de renombre han formado parte de sus películas y series.
                            En esta sección vamos a hacer un repaso por las estrellas más icónicas que dejaron su huella
                            en la saga a lo largo del tiempo.",
                    "enlace" => "./Paginas/Reparto.php",
                    "destacado" => false
            
                ],
                [
                    "imagen" => "./Recursos/Imagenes/detras-escena-home.jpg",
                    "alt" => "Detrás de Escena",
                    "titulo" => "Detrás de Escena",
                    "texto" => "Un reconocimiento a quienes hicieron posible que Star Wars se convierta en un verdadero
                            universo cinematográfico.
                            En esta sección vamos a recorrer el detrás de escena, explorando los estudios de grabación,
                            la historia de sus creadores y productores, las locaciones de filmación, el diseño de sonido
                            y mucho más.",
                    "enlace" => "./Paginas/DetrasEscena.php",
                    "destacado" => false
                ],
                [
                    "imagen" => "./Recursos/Imagenes/curiosidades-home.jpg",
                    "alt" => "Curiosidades",
                    "titulo" => "Curiosidades",
                    "texto" => "Vamos a hacer un recorrido por las curiosidades y anécdotas que dejó Star Wars a lo largo de
                            los años, para complementar de la mejor manera esta increíble historia.
                            Además, repasaremos las distintas premiaciones y reconocimientos que la saga ha recibido con
                            el paso del tiempo.",
                    "enlace" => "./Paginas/Curiosidades.php",
                    "destacado" => false
                ],
                [
                    "imagen" => "./Recursos/Imagenes/juegos-home.jpg",
                    "alt" => "Juegos",
                    "titulo" => "Juegos",
                    "texto" => "Un repaso por los títulos más destacados de la extensa lista de videojuegos que ha ofrecido
                            el universo de Star Wars a lo largo del tiempo.",
                    "enlace" => "./Paginas/Juegos.php",
                    "destacado" => false
                ]

            ];
            ?>

            <?php
            foreach ($articulosHome as $articulo){
                ?>
                    <div class="container-article-home">

                        <article class="article-home">
                            <img 
                            src="<?php echo $articulo["imagen"]; ?>" 
                            alt="<?php echo $articulo["alt"]; ?>"
                            class="imagen-articulo-home"
                            >

                        <div class="encabezado-articulo-home">
                        
                        <h3 class="titulo-articulo-home"> 
                            <?php echo $articulo["titulo"]; ?>
                        </h3>

                        <?php
                            if ($articulo["destacado"]) {
                            ?>
                                <span class="etiqueta-destacado">
                                    ★ DESTACADO
                                </span>
                            <?php
                            }
                        ?>

                        </div>

                            <div class="contenido-article-home">

                            <p>
                                <?php echo $articulo["texto"]; ?>
                            </p>

                            <a href="<?php echo $articulo["enlace"]; ?>">
                                    Ver más...
                            </a>
                    </div>
                </article>
                </div>
             <?php
            }
            ?>  

        </section>


    </main>

    <?php 
    include_once './Componentes/footer.php';
    ?>

</body>
</html>