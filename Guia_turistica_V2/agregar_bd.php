<?php
    require 'conexion_bd.php';

    $target_path = "img/articulos/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
    $target_path_bd = "http://www.diegoguevara.me/" . $target_path;

    if(isset($_POST['aceptar'])){
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $precio = mysqli_real_escape_string($conexion, $_POST['precio']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $cantidad = mysqli_real_escape_string($conexion, $_POST['cantidad']);

        $query = "INSERT INTO articulos VALUES (NULL, '$nombre', '$precio', '$descripcion', '$cantidad', '$target_path_bd')";
        mysqli_query($conexion, $query);
        echo "<script>alert('Producto agregado exitosamente')</script>";
        header('Location: inventario.php');
    }

        
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        echo "<script>alert('Modificado exitosamente')</script>";
        header('Location: inventario.php'); 
    }
?>