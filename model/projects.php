<?php
    include("/config/connection.php");
    $consulta= "SELECT * FROM proyectbriefcase";
    $con=conectar();
    $lenguajes=mysqli_query($con, $consulta);

    $datos= array();
    $num=0;
    while ($exist=mysqli_fetch_assoc($lenguajes)) {
        $datos[] = [$exist["name_proyect"],$exist["img_direction"], 
                $exist["description_proyect"], $exist["direction_proyect"],
                $exist["direction_repo"],  $exist["tecnology"], $exist["id_proyect"]];
    }
?>
<section class="clearfix">
    <div class="project-section">
        <?php
        foreach ($datos as $dato) {?>
            <div class="project-container">
                <div class="project-img-container" onclick="document.getElementById('modal-wrapper<?php echo $dato[6] ?>').style.display='block'">
                    <img src="<?php echo $dato[1] ?>" alt="project image">
                </div>
                <p class="project-title"><?php echo $dato[0] ?></p>
            </div>
        <?php
        }
        ?>
    </div>
    
    <?php
        foreach ($datos as $dato2) {?>
            <div id="modal-wrapper<?php echo $dato2[6];?>" class="modal">
                <form class="modal-content animate">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('modal-wrapper<?php echo $dato2[6];?>').style.display='none'" class="close" title="Close PopUp">&times;</span>
                           <img src="<?php echo $dato2[1];?>" alt="project" class="avatar">
                            <h1 class="project_details" style="text-align:center"><?php echo $dato2[0];?></h1>
                    </div>
                   
                    <div class="container">
                        <textarea class="project_description" rows="7" placeholder= "Descripcion del proyecto" readonly><?php echo $dato2[2];?></textarea>
                        <input type="url" value="<?php echo $dato2[3];?>"readonly>
                        <input type="url" value="<?php echo $dato2[4];?>"readonly>
                        <input type="text" value="<?php echo $dato2[5];?>" readonly>
                    </div>
                </form>
            </div>
        <?php
            }
            ?>
        
</section>