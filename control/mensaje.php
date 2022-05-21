<?php
    $mensaje= $_POST["correo"];
    /*echo "hola mundo ". $mensaje;
    echo '<script language="javascript">alert("Tu mensaje ha sido enviado, en breves nos pondremos en contacto contigo");</script>';
    header("Location: ../index.php#contact" , TRUE, 301);
    exit();*/
    echo '<script type="text/javascript">

    alert("Tu mensaje ha sido enviado exitosamente, en breve contactare contigo");
    
    window.location.assign("../index.php");
    
    </script>';
    exit();
?>