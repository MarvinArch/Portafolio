<?php
    define("usuario", "admin");
    define("contra", "admin"); 
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    
    if ($nombre==usuario && $password==contra) {
        session_start();
        $_SESSION['revision']="true";
        header("Location: ../view/page/admin.php");
        exit();
    }else{
        header("Location: ../view/page/login.php?error=true");
        exit();
    }


?>