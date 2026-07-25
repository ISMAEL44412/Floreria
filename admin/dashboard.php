<?php 

session_start();

if(!$_SESSION) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flores Eternas</title>
    <link rel="stylesheet" href="../build/css/app.css">
    <link rel="shortcut icon" href="img_webp/flor.webp" type="image/x-icon">
    <link rel="preload" href="../build/css/app.css" as="style" />
    <!-- * Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="dashboard">
    <aside class="aside">
        <div class="aside__logo">
            <img loading="lazy" class="navegacion__imagen" src="../img_webp/logo_sin_background.webp" alt="">
        </div>
        <nav class="aside__navegacion">
            <a href="../index.php">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Configuración</a>
            <a href="#">Cerrar Sesión</a>
        </nav>
    </aside>
    <main>
     <h1>Titulo</h1>
    </main>
</body>