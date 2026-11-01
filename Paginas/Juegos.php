<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Juegos</title>
    <meta name="description"
        content="Sección dedicada a videojuegos destacados de Star Wars, con títulos importantes y experiencias inspiradas en la saga.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/juegos.css">
   
    
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
            <source src="../Recursos/Audio/The Imperial March.mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </aside>
</section>

    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">JUEGOS</h1>
            <p class="texto-introduccion-pagina">
                El universo de Star Wars no solo se expandió en el cine y las series, sino también en el mundo de los
                videojuegos, donde a lo largo de los años se desarrolló una enorme variedad de títulos para distintas
                plataformas y estilos de juego. Desde aventuras narrativas hasta juegos de acción y estrategia, la saga
                logró conquistar también a los jugadores, permitiéndoles vivir sus propias historias dentro de la
                galaxia.</p>

            <p class="texto-introduccion-pagina">
                Muchos de estos juegos no solo adaptaron momentos icónicos de las películas, sino que también ampliaron
                el universo con nuevas tramas, personajes y conflictos que enriquecen la experiencia original. Gracias a
                esto, los fans pudieron explorar el lado Jedi, el lado oscuro o incluso historias completamente
                independientes, tomando decisiones y participando activamente en el destino de la galaxia.</p>

            <p class="texto-introduccion-pagina">
                A continuación, repasamos algunos de los juegos mejor valorados por la crítica y los fans, que supieron
                capturar la esencia de Star Wars y ofrecer experiencias inolvidables.

            </p>
        </section>

        <?php
        $juegos = [
            [
            "imagen" => "../Recursos/Imagenes/Juegos/1.jpg",
            "alt" => "Star Wars: Knights of the Old Republic",
            "texto" => "Star Wars: Knights of the Old Republic (2003)"
            ],
            [
            "imagen" => "../Recursos/Imagenes/Juegos/FallenOrder.jpg",
            "alt" => "Star Wars Jedi: Fallen Order",
            "texto" => "Star Wars Jedi: Fallen Order (2019)"
            ],
            [
            "imagen" => "../Recursos/Imagenes/Juegos/Battlefront2.jpg",
            "alt" => "Star Wars Battlefront II",
            "texto" => "Star Wars Battlefront II (2017 - versión mejorada)"
            ],
            [
            "imagen" => "../Recursos/Imagenes/Juegos/Lego.jpg",
            "alt" => "LEGO Star Wars: The Skywalker Saga",
            "texto" => "LEGO Star Wars: The Skywalker Saga (2022)"
            ],
            [
            "imagen" => "../Recursos/Imagenes/Juegos/unlish.jpg",
            "alt" => "Star Wars: The Force Unleashed",
            "texto" => "Star Wars: The Force Unleashed (2008)"
            ]
        ];
        ?>

        <section class="section-reparto">
            <?php
            foreach ($juegos as $titulo){
                ?>

                <article class="contenedor-juegos">
                    <div class="contenedor-imagen-juegos">
                    <img
                        src= "<?php echo $titulo["imagen"]; ?>"
                        alt= "<?php echo $titulo["alt"]; ?>"
                        class= "imagen-juegos"
                    >
                    </div>
                    <div class="contenedor-texto-juegos">
                        <h2 class="h2-titulo-juegos">
                            <?php echo $titulo["texto"]; ?>
                        </h2>
                    </div>
                </article>
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