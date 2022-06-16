<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
           $error=$_GET["error"];

            if ($error) {
        ?>
        <div>
            <h3>Usuario y Contrasela Incorrecta</h3>
        </div>
        <?php
            }
        ?>
    </div>
    <form action="../../control/Aprovelogin.php" method="post">
        <label for="nombre">Usuario</label>
        <input type="text" name="nombre" id="">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Ingresar">  
    </form>
</body>
</html>