<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../logo.png" />
    <title>TurisTam - Abasolo</title>
</head>
<body>

<?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include '../../includes/nav-admin.php';
            }else{
                include '../../includes/info-login-in.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include '../../includes/info-login.php';
            }
        ?>

    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include '../../includes/header-in.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include '../../includes/nav-admin.php';
            }else{
                include '../../includes/nav-municipios.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include '../../includes/nav-municipios.php';
            }
        ?>
        
            <section class="">
                <div class="container">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <h2 class="section-title1">Abasolo</h2>
                    <h3 class="section-title2">Atracciones turísticas</h3>
                    <div class="split">
                        <a href="http://167.71.185.28/municipios/abasolo/naturales.php" class="featured__item">
                            <img src="http://167.71.185.28/img/atracciones_naturales.jpg" alt="" class="featured__img">
                            <p class=""><span class="price">Naturales</span></p>
                        </a>
                        <a href="http://167.71.185.28/municipios/abasolo/patrimoniales.php" class="featured__item">
                            <img src="http://167.71.185.28/img/atracciones_patrimoniales.jpg" alt="" class="featured__img">
                            <p class=""><span class="price">Patrimoniales</span></p>
                        </a>
                    </div>
                </div>
            </section>
                <div class="container">
                    <div class="split">
                        <a href="http://167.71.185.28/municipios/abasolo/eventos.php" class="featured__item">
                            <img src="http://167.71.185.28/img/atracciones_eventos.png" alt="" class="featured__img">
                            <p class=""><span class="price">Eventos</span></p>
                        </a>
                        <a href="http://167.71.185.28/municipios/abasolo/parques.php" class="featured__item">
                            <img src="http://167.71.185.28/img/atracciones_parques.jpg" alt="" class="featured__img">
                            <p class=""><span class="price">Parques</span></p>
                        </a>
                    </div>
                </div>

        </main>
        <?php
            include '../../includes/footer.php'
        ?>


    </div>
</body>
</html>