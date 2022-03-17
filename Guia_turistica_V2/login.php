<?php
    require 'conexion_bd.php';
    $valido = false;
    if(isset($_POST['aceptar'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if(!valida_usuario_bd($usuario,$contrasena,$conexion)){
            $valido = false;
        }else{
            session_start();
            $valido = true;
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        }
    }
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
    <link rel="shortcut icon" href="http://167.71.185.28/icono.jpg" />
    <title>TurisTam - Login</title>
</head>
<body class="login-body">



    <div class="wrapper">
    <?php
        include 'includes/header-in.php';
        include 'includes/nav-inicio.php';
    ?>
        <div class="login">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <fieldset class="container spacing">
                    <legend class="app-title">Login</legend>
                    <div class="">
                            <input class="pad" type="text" name="usuario" id="myname" autofocus placeholder="Usuario" required> <br>
                            <input class="pad" type="password" name="contrasena" id="companyname" placeholder="Contraseña"> <br>
                            <p>¿No tiene cuenta? <a href="registrar.php">¡Regístrese!</a></p>
                            <input type="submit" name="aceptar" value="Entrar" class="btn"> <br>
    
                        <?php
                            if(!$valido&&isset($_POST['aceptar'])){
                                echo '<p class = "alerta">Usuario y/o contraseña no válido</p>';
                            }
                        ?>
                    </div>
                </fieldset>
            </form>
        </div>
    <?php
        include 'includes/footer.php';
    ?>
    </div>
</body>
</html>