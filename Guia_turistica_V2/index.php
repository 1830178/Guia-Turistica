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
    <title>TurisTam - Bienvenido</title>
</head>
<body>

        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            include 'includes/info-login-in.php';
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/info-login.php';
            }
        ?>
    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include 'includes/header.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/nav-admin.php';
            }else{
                include 'includes/nav-inicio.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-inicio.php';
            }
        ?>
        
        <main>
            <section class="featured">
                <div class="container">
                    <h2 class="section-title">Lugares Destacados</h2>
                    <div class="split">
                        <a href="municipios/abasolo/index.php" class="featured__item">
                            <img src="img/lugar1.jpg" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Abasolo</span>Adoptó su actual nombre en honor de Mariano Abasolo</p>
                        </a>
                        <a href="tienda.php" class="featured__item">
                            <img src="img/lugar2.jpg" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Gómez Farías</span>Sobre la cuenca del río Guayalejo</p>
                        </a>
                        <a href="tienda.php" class="featured__item">
                            <img src="img/lugar3.jpg" alt="" class="featured__img">
                            <p class="featured__details"><span class="price">Mier</span>Oficialmente pueblo mágico</p>
                        </a>
                    </div>
                </div>
            </section>


            <section class="our-products">
                <div class="container">
                    <h2 class="section-title">Tus próximos destinos</h2>
                    <article class="product spacing producto1 product__image1">
                        <h3 class="product__title">Abasolo</h3>
                        <p class="product__description">Se encuentra localizado al centro oeste del estado y aproximadamente a 119 kilómetros al este de la ciudad de Ciudad Victoria. Fue fundado con el nombre de Villa de Santillana, pero en 1828 adoptó su actual nombre en honor de Mariano Abasolo.</p>
                        <a href="http://167.71.185.28/municipios/abasolo/index.php" class="btn">Más información</a>
                    </article>
                    <article class="product spacing producto2 product__image2">
                        <h3 class="product__title">Gómez Farías</h3>
                        <p class="product__description">El municipio de Gómez Farías se localiza en la porción media del Estado de Tamaulipas, sobre la cuenca hidrológica del río Guayalejo. Colinda al norte con el municipio de Llera; al sur con el de Mante; al este con el de Xicotencatl y al oeste con el de Ocampo.</p>
                        <a href="tienda.php" class="btn">Más información</a>
                    </article>
                    <article class="product spacing producto3 product__image3">
                        <h3 class="product__title">Mier</h3>
                        <p class="product__description">Ciudad Mier, cabecera del municipio de Mier, es una ciudad del estado mexicano de Tamaulipas, localizada en la Frontera entre Estados Unidos y México y cerca de la Presa Falcón, al noreste del estado. Desde el 2007 tiene el título de Pueblo Mágico.</p>
                        <a href="tienda.php" class="btn">Más información</a>
                    </article>
                </div>
            </section>
        </main>
        <?php
            include 'includes/footer.php'
        ?>


    </div>
</body>
</html>