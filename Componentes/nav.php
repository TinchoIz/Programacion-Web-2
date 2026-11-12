<?php
$paginaActual = basename($_SERVER['PHP_SELF']);
?>

<nav class="navegacion-principal">
            <ul>
                <?php
                if ( $paginaActual != "index.php" ) {
                ?>

                <li><a href="<?= BASE_URL ?>/index.php">Inicio</a></li>
                <?php
                }
                ?>

                <li><a href="<?= BASE_URL ?>/Paginas/UniversoCinematografico.php">Universo Cinematográfico</a></li>
                <li><a href="<?= BASE_URL ?>/Paginas/Reparto.php">Reparto</a></li>
                <li><a href="<?= BASE_URL ?>/Paginas/DetrasEscena.php">Detrás de Escena</a></li>
                <li><a href="<?= BASE_URL ?>/Paginas/Curiosidades.php">Curiosidades</a></li>
                <li><a href="<?= BASE_URL ?>/Paginas/Juegos.php">Juegos</a></li>
                <li><a href="<?= BASE_URL ?>/Paginas/contacto.php">Contacto</a></li>
            </ul>
        </nav>