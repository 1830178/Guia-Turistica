<?php
    require 'conexion_bd.php';
    $username = $_SESSION['usuario'];
    $sql_fetch_todos = "SELECT * FROM lugares ORDER BY id ASC";
    $query = mysqli_query($conexion, $sql_fetch_todos);

    $sql_fetch_usuarios = "SELECT * FROM usuarios ORDER BY id ASC";
    $query2 = mysqli_query($conexion, $sql_fetch_todos);
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
    <title>TurisTam - Lugares Recomendados</title>
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
                include 'includes/nav-recomendados.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-recomendados.php';
            }
        ?>

        <section>
            <div class="container ventas titulo-recomendados">
                <div>
                    <h1>Lugares recomendados</h1>
                    <p>Lista de lugares recomendados por usuarios ¡Echa un vistazo! ¿Tienes alguna recomendación? <a href="registrar_lugar.php">Haz clic aquí</a> para publicar tu lugar favorito.</p>
                </div>
            </div>
        </section>
        <div class="container spacing recomendados">
            <?php
                while ($row = mysqli_fetch_array($query)) {?>
                    <table class="tabla-lugar">
                        <tbody>
                        <tr class="centro-tabla nombre-lugar"><td><?php echo $row['nombre'] ?></td></tr>
                        <tr><td><?php echo $row['descripcion'] ?></td></tr>
                        <tr class="centro-tabla"><td><img src='<?php echo $row['img'] ?>' class='imgbd'></img></td></tr>
                        <tr><td>Recomendado por: <?php echo $row['usuario'] ?></td></tr>
                        </tbody>
                        </table>
                <?php
                    } ?>
        </div>
        <?php
            include 'includes/footer.php'
        ?>
    </div>

    
</body>
</html>
