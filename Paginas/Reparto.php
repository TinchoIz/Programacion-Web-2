<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reparto</title>
    <meta name="description"
        content="Sección dedicada al reparto de Star Wars, con actores y personajes destacados de las películas y series de la saga.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../Recursos/Iconos/favicon-vader-pixel.ico">
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
    <link rel="stylesheet" href="../Estilos/reparto.css">
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
            <source src="../Recursos/Audio/Across the Stars.mp3" type="audio/mpeg">
            Tu navegador no soporta el elemento de audio.
        </audio>
    </aside>
</section>

    <main class="main-universo">
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">REPARTO</h1>
            <p class="texto-introduccion-pagina">
                Las películas de Star Wars cuentan con amplios elencos, muchas veces corales, con múltiples
                protagonistas que han dado vida a algunos de los personajes más icónicos del cine.

                Mark Hamill, Harrison Ford y Carrie Fisher protagonizan la trilogía original como Luke Skywalker, Han
                Solo y Leia Organa. En las precuelas, Liam Neeson, Ewan McGregor, Natalie Portman y Jake Lloyd
                interpretan a Qui-Gon Jinn, Obi-Wan Kenobi, Padmé Amidala y Anakin Skywalker, respectivamente, con
                Hayden Christensen tomando el papel de Anakin en su etapa adulta.</p>

            <p class="texto-introduccion-pagina">

                Años más tarde, actores de la trilogía original regresaron para compartir pantalla con una nueva
                generación: Adam Driver como Kylo Ren, Daisy Ridley como Rey y John Boyega como Finn.

                Otros nombres destacados incluyen a Felicity Jones en Rogue One (2016) y Alden Ehrenreich como el joven
                Han Solo en Solo: A Star Wars Story (2018).</p>

            <p class="texto-introduccion-pagina">
            A continuación, repasamos algunos de los actores que interpretaron a los personajes más icónicos de la
            saga, comparando sus primeras apariciones con su actualidad.
            </p>
        </section>

        <?php
        $reparto = [
            [
                "imagen" => "../Recursos/Imagenes/Reparto/HarrisonFord.jpg",
                "alt" => "Harrison Ford antes y después",
                "texto" => "1. Harrison Ford como Han Solo, 1980 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/EwanMcgregor.jpg",
                "alt" => "Ewan McGregor antes y después",
                "texto" => "2. Ewan McGregor como el joven Obi-Wan Kenobi, 2005 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/HamillFisher.jpg",
                "alt" => "Mark Hamill y Carrie Fisher antes y después",
                "texto" => "3. Mark Hamill y Carrie Fisher como Luke Skywalker y la Princesa Leia, 1977 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Portman.jpg",
                "alt" => "Natalie Portman antes y después",
                "texto" => "4. Natalie Portman como Padmé Amidala, 2003 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Daniels.jpg",
                "alt" => "Anthony Daniels antes y después",
                "texto" => "5. Anthony Daniels como С-3РO, 1977 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Baker.jpg",
                "alt" => "Kenny Baker antes y después",
                "texto" => "6. Kenny Baker como R2-D2, 1977 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Chewbacca.jpg",
                "alt" => "Peter Mayhew antes y después",
                "texto" => "7. Peter Mayhew como Chewbacca, 1977 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Jackson.jpg",
                "alt" => "Samuel L Jackson antes y después",
                "texto" => "8. Samuel L Jackson como Mace Windu, 2005 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Williams.jpg",
                "alt" => "Billy Dee Williams antes y después",
                "texto" => "9. Billy Dee Williams como Lando Calrissian, 1980 y 2014"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Palpatine.jpg",
                "alt" => "Ian McDiarmid antes y después",
                "texto" => "10. Ian McDiarmid como Palpatine, 2005 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/ElMasCapo.jpg",
                "alt" => "Hayden Christensen antes y después",
                "texto" => "11. Hayden Christensen como Anakin Skywalker, 2005 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Maul.jpg",
                "alt" => "Ray Park antes y después",
                "texto" => "12. Ray Park como Darth Maul, 1999 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Vader.jpg",
                "alt" => "David Prowse antes y después",
                "texto" => "13. David Prowse como Darth Vader, 1977 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Neson.jpg",
                "alt" => "Liam Neeson antes y después",
                "texto" => "14. Liam Neeson como Qui-Gon Jinn, 1999 y 2015"
            ],
            [
                "imagen" => "../Recursos/Imagenes/Reparto/Lawson.jpg",
                "alt" => "Lawson antes y después",
                "texto" => "15. Denis Lawson como Wedge Antilles, 1980 y 2015"
            ]
        ];
        ?>

        <section class="section-reparto">
            <?php
            foreach ($reparto as $actor){
                ?>

                <article class="contenedor-reparto">
                    <div class="contenedor-imagen-reparto">
                    <img
                        src= "<?php echo $actor["imagen"]; ?>"
                        alt= "<?php echo $actor["alt"]; ?>"
                        class= "imagen-reparto"
                    >
                    </div>
                    <div class="contenedor-texto-reparto">
                        <h2 class="h2-titulo-reparto">
                            <?php echo $actor["texto"]; ?>
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