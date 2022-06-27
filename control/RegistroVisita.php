<?php
    include("../config/connection.php");
    try {
        /*$con=conectar();
        $consulta= "INSERT INTO contactos VALUES ( 0, '". $nombre. "', '" .$correo. "', '".$telefono."', '".$mesaje."')";
        $lenguajes=mysqli_query($con, $consulta);*/
        header("Location: ../index.php");
        die();
    } catch (Exception $e) {
        echo "no se realizo la conexion ". $e->getMessage();
    }
    
    
?>