<header class="header-principal">
        <div class="acceso-usuario">
            <?php
            if(isset($_SESSION["usuario_id"])) {
            ?>
                <span>
                    Hola, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>
                </span>  
                
                <a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/login.php">Mi cuenta</a>
            <?php
            } else {
                ?>
                    <a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/login.php">Ingresar</a>
            
            <span>Crear cuenta</span>  <!-- temporal hasta crear la pagina-->
            <?php
            }
            ?>
        </div>
        <div class="contenedor-logo">
            <img src="/26-ACN2BV-IZAGUIRRE-MARTIN/Recursos/Imagenes/StarWars.png" alt="Star Wars">
            <h1>Star Wars Fan Page</h1>
        </div>
         <?php
        include_once 'nav.php';
        ?>
    </header>
    