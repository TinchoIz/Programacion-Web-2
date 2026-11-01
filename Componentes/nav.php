<?php
$paginaActual = basename($_SERVER['PHP_SELF']);
?>

<nav class="navegacion-principal">
            <ul>
                <?php
                if ( $paginaActual != "index.php" ) {
                ?>

                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/index.php">Inicio</a></li>
                <?php
                }
                ?>

                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/UniversoCinematografico.php">Universo Cinematográfico</a></li>
                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/Reparto.php">Reparto</a></li>
                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/DetrasEscena.php">Detrás de Escena</a></li>
                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/Curiosidades.php">Curiosidades</a></li>
                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/Juegos.php">Juegos</a></li>
                <li><a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/contacto.php">Contacto</a></li>
            </ul>
        </nav>