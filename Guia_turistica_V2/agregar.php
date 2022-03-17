<?php
    require 'conexion_bd.php';
    $username = $_SESSION['usuario'];
    $sql_fetch_todos = "SELECT * FROM articulos ORDER BY id ASC";
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
    <link rel="shortcut icon" href="icono.jpg" />
    <title>Be Cool Shop - Agregar Inventario</title>
</head>
<body>
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
            header('Location: index.php');
          }
        }
        if(!(isset($_SESSION['usuario']))){
            header('Location: index.php');
        }
    ?>

    <div class="container spacing">
        <h1>Agregar Producto</h1>
    </div>

    <form method="POST" action="agregar_bd.php" class="container spacing" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre del Producto</label>
                <br>
                <input type="text" value="<?php echo $_GET['nom'] ?>" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <br>
                <input type="text" value="<?php echo $_GET['precio'] ?>" class="form-control" name="precio" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descripción</label>
                <br>
                <input type="text" value="<?php echo $_GET['desc'] ?>" class="form-control" name="descripcion" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Cantidad</label>
                <br>
                <input type="text" value="<?php echo $_GET['cant'] ?>" class="form-control" name="cantidad" required>
            </div>
            <div>
                <input type="file" name="uploadedfile">
            </div>
            <br>
            <div class="botones">
                <button type="submit" class="btn" name="aceptar">Aceptar</button>
                <a href="inventario.php" class="btn">Volver</a>
            </div>
    </form>

    <?php
        include 'includes/footer.php'
    ?>
</body>
</html>