<section class="clearfix">
    <div class="project-section">
        <div class="project-container">
            <div class="project-img-container" onclick="document.getElementById('modal-wrapper1').style.display='block'">
            <img src="img/Muebles.png" alt="project image">
            </div>
            <p class="project-title">Fabrica de Muebles</p>
        </div>
    </div>
    
    <div id="modal-wrapper1" class="modal">
        <form class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    <img src="img/Muebles.png" alt="project" class="avatar">
                    <h1 class="project_details" style="text-align:center">Fabrica de Muebles</h1>
            </div>

            <div class="container">
                <textarea class="project_description" rows="7" placeholder="Proyecto Universitario hecho para empresa dedicada a la fabricacion y venta de Muebles, el software controla el inventario de la fabrica tanto de piezas como de muebles existentes, asi como la venta de muebles, genera reportes para la administracion del negocio" readonly></textarea>
                <input type="url" value="https://listacliente.herokuapp.com/"readonly>
                <input type="url" value="https://github.com/MarvinArch/proyecto1IPC2.git"readonly>
                <input type="text" value="Java, Css, Html" readonly>
            </div>

        </form>

    </div>
</section>