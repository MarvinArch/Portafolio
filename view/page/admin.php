<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("../../config/connection.php");
    session_start();
    if ($_SESSION['revision']!=null) {
        # code...
        $consulta= "SELECT * FROM contactos";
        $con=conectar();
        $lenguajes=mysqli_query($con, $consulta);
?>
    <table>
        <tr>
            <th>Numero</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Mensaje</th>
        </tr>
    <?php 
        while ($exist=mysqli_fetch_assoc($lenguajes)) { ?>
            <div class="meter emerald">
                
                <tr>
                    <td><?php echo $exist["idcontactos"]; ?></td>
                    <td><?php echo $exist["nombre_Contacto"]; ?></td>
                    <td><?php echo $exist["correo_Contacto"]; ?></td>
                    <td><?php echo $exist["tel_contacto"]; ?></td>
                <td><?php echo $exist["mensaje"]; ?></td>
            </tr>
                
                
        </div>
    <?php }
    } else {
        header("Location: login.php");
        exit();
    } ?>
    </table>
</body>
</html>