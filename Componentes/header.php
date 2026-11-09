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
            if($_SESSION["rol"] === "admin") {
                ?>
                    <a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/admin.php">Administración</a>
                <?php
            }
            ?>
            
            <?php   
            } else {
                ?>
                    <a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/login.php">Ingresar</a>
            
                    <a href="/26-ACN2BV-IZAGUIRRE-MARTIN/Paginas/registro.php">Crear cuenta</a>  
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
    