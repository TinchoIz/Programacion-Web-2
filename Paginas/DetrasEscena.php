<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detrás de Escena</title>
    <meta name="description"
        content="Recorrido por el detrás de escena de Star Wars, incluyendo dirección, producción, efectos especiales, locaciones y música.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/detras-escena.css">
    
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
            <source src="../Recursos/Audio/Anakin's Dark Deeds.mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </aside>
</section>
    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">DETRAS DE ESCENA</h1>
            <p class="texto-introduccion-pagina">
                El universo de Star Wars no solo se construyó a partir de sus historias y personajes, sino también
                gracias a un enorme trabajo detrás de cámara que revolucionó la industria del cine. Desde sus comienzos
                en 1977 bajo la dirección de George Lucas, la saga se destacó por su ambición, su innovación técnica y
                una visión que buscaba llevar la ciencia ficción a un nuevo nivel.</p>
            <p class="texto-introduccion-pagina">
                A lo largo de los años, distintos equipos de producción, compositores, especialistas en efectos
                especiales y locaciones reales contribuyeron a dar forma a este universo único. En esta sección,
                exploraremos algunos de los aspectos más importantes del detrás de escena, desde la dirección y
                producción, la música, las locaciones de filmación y los efectos especiales que marcaron un antes y un
                después en la historia del cine.
            </p>
        </section>

        <?php
        $seccionesDetrasEscena = [
            [
            "imagen" => "../Recursos/Imagenes/DetrasEscena/Direccion.jpg",
            "alt" => "George Lucas",
            "titulo" => "Dirección y Producción",
            "parrafo" => [
                        "Detrás del universo de Star Wars hay una visión clara impulsada por su creador, George Lucas,
                        quien no solo dirigió la primera película en 1977, sino que también sentó las bases de una forma
                        completamente nueva de hacer cine. Su enfoque combinó narrativa clásica con tecnología
                        innovadora, apostando por una producción ambiciosa que en su momento parecía imposible de
                        realizar.",
                        "A lo largo de las distintas trilogías, la dirección fue pasando por diferentes manos,
                        manteniendo siempre una identidad coherente. Equipos de producción, diseñadores y técnicos
                        trabajaron en conjunto para construir mundos, personajes y escenarios que se sintieran reales.
                        Esta coordinación entre dirección y producción fue clave para lograr una saga que no solo marcó
                        a generaciones, sino que también redefinió los estándares de la industria cinematográfica."
                    ],
            ],
            [
            "imagen" => "../Recursos/Imagenes/DetrasEscena/EspacialEffects.jpeg",
            "alt" => "Efectos Espaciales",
            "titulo" => "Efectos especiales",
            "parrafo" => [
                        "Uno de los aspectos más revolucionarios de Star Wars fue el uso de efectos especiales. Desde
                        sus inicios, la saga apostó por técnicas innovadoras que marcaron un antes y un después en
                        la industria. En la trilogía original, se utilizaron maquetas, animación cuadro por cuadro y
                        efectos prácticos que, combinados con una dirección precisa, lograron crear escenas que
                        hasta ese momento parecían imposibles.",
                        "Con el paso del tiempo, la tecnología fue evolucionando y la saga se adaptó a estos cambios.
                        Las precuelas incorporaron el uso intensivo de efectos digitales y escenarios generados por
                        computadora, ampliando enormemente las posibilidades visuales. Hoy en día, Star Wars combina
                        lo mejor de ambos mundos: efectos prácticos y tecnología digital avanzada, logrando un
                        equilibrio que mantiene la esencia original mientras continúa innovando en cada nueva
                        producción."
                    ]
            ],
            [
            "imagen" => "../Recursos/Imagenes/DetrasEscena/Location.jpg",
            "alt" => "Filmacion en Locacion",
            "titulo" => "Locaciones de Filmación",
            "parrafo" => [
                        "Otro de los elementos clave en la construcción del universo de Star Wars fueron sus
                        locaciones de filmación. Desde la trilogía original, la saga utilizó escenarios reales
                        para dar vida a planetas lejanos, logrando una sensación de autenticidad difícil de
                        replicar en estudio. Un ejemplo icónico es Tatooine, cuyas escenas fueron filmadas en
                        los desiertos de Túnez, creando uno de los paisajes más reconocibles de toda la
                        franquicia.",
                        "A lo largo de los años, la producción continuó explorando distintas partes del mundo
                        para representar nuevos planetas. Desde bosques en Europa hasta glaciares en Noruega o
                        paisajes volcánicos en Islandia, cada locación aportó identidad visual a la historia.
                        Esta combinación de escenarios reales con efectos visuales permitió construir un
                        universo creíble y diverso, manteniendo siempre la sensación de aventura y exploración
                        que caracteriza a Star Wars."
                    ]
            ],
            [
            "imagen" => "../Recursos/Imagenes/DetrasEscena/music.jpg",
            "alt" => "Grabacion Orquesta",
            "titulo" => "Musicalización",
            "parrafo" => [
                        "La música es uno de los pilares fundamentales de Star Wars y una de las razones por
                        las que la saga logró una identidad tan fuerte desde sus inicios. El compositor John
                        Williams fue el encargado de crear la banda sonora original, inspirándose en la
                        música clásica y en grandes compositores del cine para dar vida a temas que hoy son
                        reconocidos en todo el mundo.",
                        "Desde la icónica 'Marcha Imperial' hasta el tema principal de la saga, cada
                        composición fue pensada para acompañar a los personajes y reforzar las emociones de
                        cada escena. A lo largo de las distintas películas, la música evolucionó junto con
                        la historia, manteniendo siempre una coherencia sonora que conecta todas las
                        trilogías.",
                        "La grabación con orquestas reales, como la que se observa en esta imagen, fue clave
                        para lograr una calidad sonora única. Incluso en la actualidad, con el avance de la
                        tecnología digital, la saga continúa apostando por la combinación de instrumentos
                        tradicionales y nuevas técnicas, manteniendo viva una de las bandas sonoras más
                        emblemáticas de la historia del cine."
            ]
            ]
        ];
        ?>

        <section class="section-detras">
            <?php
            foreach ($seccionesDetrasEscena as $seccion){
                ?>

                <article class="contenedor-detras">
                    <div class="contenedor-imagen-detras">
                    <img
                        src= "<?php echo $seccion["imagen"]; ?>"
                        alt= "<?php echo $seccion["alt"]; ?>"
                        class= "imagen-detras"
                    >
                    </div>
                    <div class="contenedor-texto-detras">
                        <h2 class="h2-titulo-detras">
                            <?php echo $seccion["titulo"]; ?>
                        </h2>

                    <?php
                foreach ($seccion["parrafo"] as $parrafo) {
                ?>

                    <p class="texto-detras">
                        <?php echo $parrafo; ?>
                    </p>

                <?php
                }
                ?>
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