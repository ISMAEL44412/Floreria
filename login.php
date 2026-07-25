<?php
require_once __DIR__ . '/includes/funciones.php';
require_once __DIR__ . '/includes/config/database.php';

$db = database();


$alertas = [];
// $password = 123456789;
// $passwordHash = password_hash($password, PASSWORD_DEFAULT);
// $admin = "INSERT INTO usuarios( nombre, apellido, email, password) VALUES(";
// $admin .= "'root', 'root', 'correo@correo.com',";
// $admin .= "'". $passwordHash. "');";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]) ?? '';
    $password = $_POST["password"] ?? '';

    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = ?");

    $stmt->bind_param('s', $email);

    $stmt->execute();

    $result = $stmt->get_result();
    $result = $result->fetch_assoc();

    if ($result) {
        // * Usuario encontrado;
        $password_verificado = password_verify($password, $result["password"]);
        if ($password_verificado) {
            header("Location: /admin/dashboard.php");
        } else {
            $alertas[] = "Contraseña incorrecta";
        }
    } else {
        $alertas[] = "Usuario incorrecto";
    }
}
?>

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

<body class="login">
    <div class="login__contenedor">
        <h1>Iniciar Sesion</h1>
        <a href="/index.php" class="volver"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
            Volver</a>


        <form class="formulario" method="post">
            <div class="formulario__campo">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Tú email">
            </div>
            <div class="formulario__campo">
                <label for="password">Tu contraseña</label>
                <input id="password" name="password" type="password" placeholder="Tú contraseña">
            </div>
            <?php foreach ($alertas as $alerta): ?>
                <div class="mensaje">
                    <p>
                        <?php echo $alerta; ?>
                    </p>
                </div>
            <?php endforeach; ?>
            <input class="formulario__submit" type="submit" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/olvide.php">Recuperar contraseña</a>
        </div>
    </div>
    <script src="src/js/app.js"></script>
</body>

</html>