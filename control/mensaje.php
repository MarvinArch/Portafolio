<?php
    include("../config/connection.php");
    
    
    // captando datos del formulario
    $nombre= is_null($_POST["nombre"]) ? "No hay nombre de contacto" : $_POST["nombre"] ;
    $correo= is_null($_POST["correo"]) ? "No hay contacto de Correo" : $_POST["correo"] ;
    $telefono=is_null($_POST["telefono"])  ? "No hay contacto de telefono" : $_POST["telefono"];
    $mesaje= $_POST["mensaje"];
    
    //Datos de correo
    define("destino", "marvinejo@gmail.com");
    define("Asunto", "Nuevo Mensaje desde Portafolio");

    //Crear mensaje dentro de correo
    $mensajeCorreo = "Se ha contactado $nombre  \n";
    $mensajeCorreo .= "Direccion de correo $correo  \n";
    $mensajeCorreo .= "No telefonico $telefono \n";
    $mensajeCorreo .= "Mensaje de contacto $mesaje \n";
    $mensajeCorreo .= "Se ha contactodo el ". date('d/m/Y', time());

    //Enviar el mensaje por correo se necesita SMTP
    /*$enviado=mail(destino, Asunto, $mensajeCorreo);
    if ($enviado) {
        echo("enviado");
    }else{
        echo("Error al enviar");
    }*/
    
    // metodo temporal
    try {
        $con=conectar();
        $consulta= "INSERT INTO contactos VALUES ( 0, '". $nombre. "', '" .$correo. "', '".$telefono."', '".$mesaje."')";
        $lenguajes=mysqli_query($con, $consulta);
        header("Location: ../index.php");
        die();
    } catch (Exception $e) {
        echo "no se realizo la conexion ". $e->getMessage();
    }
    
    
?>