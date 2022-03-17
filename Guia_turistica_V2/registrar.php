<?php
    require 'conexion_bd.php';

    if(isset($_POST['aceptar'])){
        $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);
        $contrasena2 = mysqli_real_escape_string($conexion, $_POST['contrasena2']);
        $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
        $tipo = 1;

        if((!(existe_usuario_bd($usuario,$conexion)))&&(!(existe_correo_bd($correo,$conexion)))){
            
            //No existe el usuario ni tampoco existe el correo en la bd y por lo tanto se crea uno nuevo con los datos ingresados
            if($contrasena == $contrasena2){
                if(strlen($contrasena) >= 5 && strpbrk($contrasena, "!#$.,:;()") != false){
                    if(strpbrk($correo, "@.") != false){
                        $query = "INSERT INTO usuarios VALUES (NULL, '$usuario', '$nombre', md5('$contrasena'), '$correo', $tipo, 'http://167.71.185.28/img/fotos/default.png')";
                        mysqli_query($conexion, $query);
                        header('Location: login.php');
                        exit;
                    }
                }
            }
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
    <link rel="shortcut icon" href="icono.jpg" />
    <title>TurisTam - Registrar</title>
</head>
<body>

    <div class="wrapper">
        <?php
            include 'includes/header-in.php';
            include 'includes/nav-inicio.php';
        ?>
        <div class="login">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <fieldset class="container spacing">
                <legend class="app-title borde" >Registrar usuario nuevo</legend>
                    <input type="text" name="usuario" id="myname" autofocus placeholder="Usuario" maxlength="20" required> <br>

                    <input type="text" name="nombre" id="companyname" placeholder="Nombre completo" maxlength="50" required> <br>

                    <input type="password" name="contrasena" id="companyname" placeholder="Contraseña" maxlength="50" required> <br>
                    <input type="password" name="contrasena2" id="companyname" placeholder="Repita la Contraseña" maxlength="50" required> <br>
                    <h3>Requerimientos de contraseña:</h3>
                    <p>Debe contener 5 caracteres</p>
                    <p>Debe contener un caracter especial: !#$.,:;()</p>

                    <input type="email" name="correo" id="companyname" placeholder="Correo electrónico" maxlength="50" required> <br>
                    <p>¿Ya tiene cuenta? <a href="login.php">¡Ingrese!</a></p>
                <input type="submit" name="aceptar" value="Registrar" class="btn boton-registrar">
                <?php
                    if(isset($_POST['aceptar'])){
                        $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
                        $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);
                        $contrasena2 = mysqli_real_escape_string($conexion, $_POST['contrasena2']);
                        $correo = mysqli_real_escape_string($conexion, $_POST['correo']);

                        if($contrasena != $contrasena2){
                            echo '<p class = "alerta">Las contraseñas ingresadas no coinciden.</p>';
                        }
                        if(existe_usuario_bd($usuario,$conexion)){
                            echo '<p class = "alerta">El usuario ingresado ya existe, ingrese otro por favor.</p>';
                        }
                        if(existe_correo_bd($correo,$conexion)){
                            echo '<p class = "alerta">El correo ingresado ya está en uso, ingrese otro por favor.</p>';
                        }
                        if($contrasena == $contrasena2){
                            if(strlen($contrasena) >= 5 || strpbrk($contrasena, "!#$.,:;()") == false){
                                echo '<p class = "alerta">Ingrese una contraseña válida.</p>';
                            }
                        }

                        if(strpbrk($correo, "@.") == false){
                            echo '<p class = "alerta">Ingrese un correo válido.</p>';
                        }
                    }
                ?>
        </div>


            </fieldset>
        </form>
        <?php
            include 'includes/footer.php';
        ?>
    </div>

</body>
</html>