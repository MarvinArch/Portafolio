<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="py-5 bg-secondary">
    <div>
        <?php
        session_start();
        if ($_SESSION['revision']!=null) {
            header("Location: admin.php");
            exit();
        }   
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
    <form action="../../control/Aprovelogin.php" method="post" class="m-0 p-0">
        <div class="container bg-info w-50 border border-success p-2 border-opacity-10 py-5" style="border-radius: 5.2rem;">
            <div class="row d-flex justify-content-center">
                <div class="col-9">
                    <label class="text-light fs-3" for="nombre">Usuario</label>
                    <input class="form-control" type="text" name="nombre" placeholder="Ingrese Nombre de Usuario">
                </div>
            </div><br>
            <div class="row d-flex justify-content-center">
                <div class="col-9">
                    <label class="text-light fs-3" for="password">Contraseña</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="**********">
                    <input type="submit" value="Ingresar" class="btn btn-primary ">
                </div>
            </div>  
        </div>
    </form>
    
</body>
</html>