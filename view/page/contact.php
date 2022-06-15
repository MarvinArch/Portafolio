<section class="clearfix">
    <form action="control/mensaje.php" method="post" onsubmit="return validarForm(this)">
        <h3>Direccion de Correo de Contacto</h3>
        <div class="input-group mb-3">
            <span class="input-group-text" >Nombre</span>
            <input type="text" class="form-control" placeholder="Nombre de Contacto" aria-label="Username" aria-describedby="basic-addon1" name="nombre" >
       </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Email</span>
            <input type="text" class="form-control" placeholder="Direccion de Correo Electronico" aria-label="Username" aria-describedby="basic-addon1" name="correo" id="corre">
       </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Telefono</span>
            <input type="text" class="form-control" placeholder="Telefono Contacto" aria-label="Username" aria-describedby="basic-addon1" name="telefono" id="tel">
        </div>
        <h3>Mensaje</h3>
        <div class="input-group">
                <span class="input-group-text">Mensaje</span>
                <textarea name="mensaje" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <br>
        <button class="btn btn-lg btn-primary" type="submit">Enviar</button>
    </form>
    <div class="break"></div>
</section>