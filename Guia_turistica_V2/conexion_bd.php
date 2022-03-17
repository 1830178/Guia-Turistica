<?php

    $bd = 'turismo_db';
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'diegon123';
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);



    

    if (!$conexion) {
        die('La conexion a la base de datos ' . $bd . ' fallo' . mysqli_connect_error());
    }


    function valida_usuario_bd($usuario, $contrasena, $conexion){
        $query = "SELECT 1 AS user_valido FROM usuarios WHERE usuario = '$usuario' AND contrasena = MD5('$contrasena')";
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        
        if(mysqli_num_rows($resultado) == 0){
            return false;
        }
        return true;
    }

    function existe_usuario_bd($usuario, $conexion){
        $query = "SELECT 1 AS user_valido FROM usuarios WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        
        if(mysqli_num_rows($resultado) == 0){
            return false;
        }
        return true;
    }

    function existe_correo_bd($correo, $conexion){
        $query = "SELECT 1 AS user_valido FROM usuarios WHERE correo = '$correo'";
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');

        if(mysqli_num_rows($resultado) == 0){
            return false;
        }
        return true;
    }

?>