
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/ImgPorta.png">
    <title>Portafolio Marvin Archila</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        require "control/UpNavigation.php";
        $barNavigation = new UpNavigation();
        $barNavigation-> UploadNavigation();
    ?>
    <br>
    <div id="AboutMe" style="display: none">
        <?php
            $barNavigation-> AboutMe();
        ?>   
    </div>
    <script src="view/js/Transitions.js"></script>
</body>
</html>