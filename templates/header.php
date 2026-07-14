<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flores Eternas</title>
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="shortcut icon" href="img_webp/flor.webp" type="image/x-icon">
    <link rel="preload" href="build/css/app.css" as="style" />
    <!-- * Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="navegacion  contenedor">
            <div class="navegacion__logo">
                <img loading="lazy" class="navegacion__imagen" src="img_webp/logo_sin_background.webp" alt="">
            </div>
            <div class="navegacion__enlaces">
                <a class="enlace <?php if($activo=='index') echo 'activo' ?>" href="index.php">Inicio</a>
                <a class="enlace <?php if($activo=='catalogo') echo 'activo' ?>" href="catalogo.php">Catálogo</a>
                <?php if($activo==='index'){?>
                <a class="enlace" href="#sobre-mi">Sobre mí</a>
                <a class="enlace" href="#trabajos-destacados">Trabajos</a>
                <a class="enlace" href="#modelos">Modelos</a>
                <a class="enlace" href="#galeria">Galeria</a>

                <?php }?>
                <a class="enlace__contactame boton"
                    href="https://wa.me/5493872154785?text=Hola,%20me%20gustaría%20recibir%20más%20información%20sobre%20sus%20productos.">
                    <i class="fa-brands fa-whatsapp"></i>
                    Escribeme
                </a>
            </div>
        </nav>
    </header>