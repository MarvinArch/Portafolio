<?php 
    function conectar(){
        define("user", "root");
        define("password", "");
        define("serverr", "localhost");
        define("db", "portafolio");
        try {
            $conecct=mysqli_connect(serverr, user, password, db);
        } catch (Exception $e) {
            hola echo "no se realizo la conexion ". $e->getMessage();
        }
        
        return $conecct;
    }
?>  