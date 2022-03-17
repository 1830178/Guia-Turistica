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
    <link rel="shortcut icon" href="http://167.71.185.28/logo.png"/>
    <title>TurisTam - Municipios</title>
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
                include 'includes/nav-municipios.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-municipios.php';
            }
        ?>


        <section>
            <div class="container quienes">
                <h3 class="section-title2">Lista de municipios de forma alfabética</h3>            
            </div>
        </section>
        
        <div class="div-tabla">
            <table>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                </tr>
                <tr>
                    <td><a href="municipios/abasolo/index.php">Abasolo</a><br>  <a href="">Aldama</a><br>   <a href="">Altamira</a><br> <a href="">Antiguo Morelos</a></td>
                    <td><a href="">Burgos</a><br>   <a href="">Bustamante</a>   </td>
                    <td><a href="">Camargo</a><br>  <a href="">Casas</a><br>    <a href="">Ciudad Madero</a><br> <a href="">Cruillas</a></td>
                </tr>
                <tr>
                    <th>G</th>
                    <th>H</th>
                    <th>J</th>
                </tr>
                <tr>
                    <td><a href="">Gómez Farías</a><br> <a href="">González</a><br> <a href="">Güémez</a><br> <a href="">Guerrero</a><br> <a href="">Gustavo Díaz Ordaz</a></td>
                    <td><a href="">Hidalgo</a></td>
                    <td><a href="">Jaumave</a><br> <a href="">Jiménez</a></td>
                </tr>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>N</th>
                </tr>
                <tr>
                    <td><a href="">Llera</a></td>
                    <td><a href="">Mainero</a><br> <a href="">Mante</a><br> <a href="">Matamoros</a><br> <a href="">Méndez</a><br> <a href="">Mier</a><br> <a href="">Miguel Alemán</a><br> <a href="">Miquihuana</a></td>
                    <td><a href="">Nuevo Laredo</a><br> <a href="">Nuevo Morelos</a></td>
                </tr>
                <tr>
                    <th>O</th>
                    <th>P</th>
                    <th>R</th>
                </tr>
                <tr>
                    <td><a href="">Ocampo</a></td>
                    <td><a href="">Padilla</a><br> <a href="">Palmillas</a></td>
                    <td><a href="">Reynosa</a><br> <a href="">Río Bravo</a></td>
                </tr>
                <tr>
                    <th>S</th>
                    <th>T</th>
                    <th>V</th>
                </tr>
                <tr>
                    <td><a href="">San Carlos</a><br> <a href="">San Fernando</a><br> <a href="">San Nicolás</a><br> <a href="">Soto La Marina</a></td>
                    <td><a href="">Tampico</a><br> <a href="">Tula</a></td>
                    <td><a href="">Valle Hermoso</a><br> <a href="">Victoria</a><br> <a href="">Villagrán</a></td>
                </tr>
                <tr>
                    <th> </th>
                    <th>X</th>
                    <th> </th>
                </tr>
                <tr>
                    <td> </td>
                    <td><a href="">Xicoténcatl</a></td>
                    <td> </td>
                </tr>
            </table>
        </div>

        <?php
                include 'includes/footer.php'
        ?>
</body>
</html>