function validarForm(form) {
    var correo = form.correo;
    var telefono= form.telefono;
    var valid=true;
    // comprueba que al menos exita un tipo de contacto correo o telefono
    if (correo.value == "" && telefono.value == "") {
        alert("Debe de Ingresar Correo o Numero de Telefono para poder ponerme en contacto");
        document.getElementById('corre').className += " is-invalid";
        document.getElementById('tel').className += " is-invalid";
        valid=false;
    }
    //validar correo
    if (valid && correo.value!= "") {
        let dev = ValidarCorreo(correo.value);
        if (dev == false) {
            alert("Lo siento al Parecer la direccion de correo ingresada es invalida");
            valid=false;
        }
    }
    //validar numero
    if (valid && telefono.value!= "") {
        let dev = validarTel(telefono.value);
        if (dev == false) {
            alert("Lo siento al Parecer el Numero telefonico es invalido");
            valid=false;
        }
    }
    //genera mensaje de aprovacion de mensaje
    if (valid) {
        alert("Gracias por dejarme su mensaje me pondre en contacto lo antes posible");
    }
    return valid;
}

// comprueba que exista el @ para validar correo
function ValidarCorreo(correo) {
    var arroba=false;
    var arregloString = correo.split("");
    var cantidad=arregloString.length;
    for (let i = 0; i < cantidad; i++) {
        if (arregloString[i] == '@') {
            arroba=true;
        }    
    }
    return arroba;
}
// comprueba que el numero de telefono sea valido
function validarTel(tel) {
    var valido=true;
    var arregloString = tel.split("");
    var cantidad=arregloString.length;
    if (arregloString[0]!='+') {
        let a =arregloString[0].charCodeAt(0);
        if (a>57 || a<48) {
            valido=false; 
        }  
    } 
    for (let i = 1; i < cantidad; i++) {
        let a =arregloString[i].charCodeAt(0);
        if (arregloString[i]!='-') {
            if (a>57 || a<48) {
                valido=false;
            }
        }        
    }
    return valido;
}