<?php
require_once __DIR__ . '/../includes/funciones.php';
require_once __DIR__ . '/../includes/config/database.php';


isAuth();

$titulo = "Configuracion";
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
    <?php include __DIR__ . "/../templates/aside.php"; ?>
    <main>
        <h1><?php echo $titulo ?></h1>
    </main>
</body>