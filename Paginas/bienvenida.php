<?php
session_start();

if(!isset($_SESSION["usuario_id"])) {
    header("Location: ./login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenida - Star Wars Fan Page</title>
    <link rel="stylesheet" href="../Estilos/general.css?v=2">
</head>
<body>

    <?php include_once '../Componentes/header.php'; ?>

    <main>
        <section class="section-introduccion-pagina">
            <h1 class="titulo-introduccion-pagina">
                Bienvenido, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>
            </h1>

            <p class="texto-introduccion-pagina">
                Ya ingresaste al Cuartel General.
            </p>
        </section>
    </main>

    <?php include_once '../Componentes/footer.php'; ?>

</body>
</html>