<?php
    include("config/connection.php");
    $consulta= "SELECT * FROM lenguajes ORDER BY progreso DESC";
    $con=conectar();
    $lenguajes=mysqli_query($con, $consulta);
?>
<section class="clearfix">
    <div class="g2">
        <h3>
            Programacion
        </h3>
        <?php 
            $num=0;
            while ($exist=mysqli_fetch_assoc($lenguajes)) { ?>
                <div class="meter emerald">
                    <span id="anim<?php echo $num;?>" style="width: <?php echo $exist["progreso"]; ?>%">
                        <span>
                            <?php echo $exist["lenguaje"]; $num++; ?>
                        </span>
                    </span>
                </div>
        <?php } ?>
    </div>
        
        

        <div class="g1">
            <h3>
                Skills
            </h3>
            <?php 
                $habilidad=mysqli_query($con, "SELECT * FROM habilidades ORDER BY porcentaje DESC" );
                while ($resp=mysqli_fetch_assoc($habilidad)) {
            ?>        
                    <div class="meter emerald">
                        <span id="anim<?php echo $num;?>" style="width: <?php echo $resp["porcentaje"]; ?>%" display="none">
                            <span>
                            <?php echo $resp["habilidad"]; 
                            $num++;?>
                            </span>
                        </span>
                    </div>
            <?php }?>
        </div>
        <div class="break"></div>
    <div class="g2">
        <h3>
            Hobbies
        </h3>
        <?php 
            $hobbie=mysqli_query($con, "SELECT * FROM hobbies" );
            while ($hob=mysqli_fetch_assoc($hobbie)) {
        ?> 
                <span class="label label-info"><?php echo $hob["hobbie"]; ?></span>
        <?php }?>
    </div>
</section>