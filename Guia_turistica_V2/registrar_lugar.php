<?php
    require 'conexion_bd.php';
    $username = $_SESSION['usuario'];
    $sql_fetch_todos = "SELECT * FROM usuarios ORDER BY id ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);
?>

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
    <title>TurisTam - Registrar Lugar</title>
</head>
<body>
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/info-login-in.php';
            }else{
                include 'includes/info-login-in.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/info-login.php';
            }
        ?>
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
                header('Location: index.php');
            }else{
                include 'includes/nav-inicio.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-inicio.php';
            }
    ?>

    <div class="wrapper">

    </div>

    <?php
        include 'includes/footer.php'
    ?>
</body>
</html>