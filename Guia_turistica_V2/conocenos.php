<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png" />
    <title>TurisTam - Conócenos</title>
</head>
<body>

<?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/nav-admin.php';
            }else{
                include 'includes/info-login-in.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/info-login.php';
            }
        ?>

    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include 'includes/header-in.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/nav-admin.php';
            }else{
                include 'includes/nav-conocenos.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-conocenos.php';
            }
        ?>

            <section class="">
                <div class="container quienes">
                    <h2 class="section-title1">Quiénes Somos</h2>
                    <p>Somos una empresa comprometida a ofrecer un servicio profesional y de calidad, ofreciendo todo lo que usted y su familia necesitan para organizar unas vacaciones inolvidables en cualquier destino de Tamaulipas.</p>
                    <h3 class="section-title2">Misión</h3>
                    <p>Brindar un servicio de calidad ofreciendo las mejores opciones de recorridos en materia turística para satisfacer sus necesidades. Buscamos ofrecer un servicio personalizado para mantener lealtad con nuestros clientes y asegurar satisfacción total.</p>
                </div>

        </main>
        
        <div class="villian contacto">
            <div class="container spacing footer-centro">
                <h2 class="TF">¡Contáctanos!</h2>
                <a href="https://www.facebook.com/becoolshop/" class="link-footer" target="_blank">
                    <img src="http://167.71.185.28/img/fb-logo.png" alt="Facebook Logo" class="img-footer">
                </a>
                <a href="https://www.instagram.com/_becoolshop/?hl=es-la" class="link-footer" target="_blank">
                    <img src="http://167.71.185.28/img/insta-logo.png" alt="Instagram Logo" class="img-footer">
                </a>
        </div>
        </div>

    </div>
</body>
</html>