
function Skills() {
    Init();
    document.getElementById("resume").style.display= 'block';
    let progra=document.getElementsByClassName("meter");
    for (let index = 0; index < progra.length; index++) {
        let porce=document.getElementById('anim'+index);
        let elementStyle = window.getComputedStyle(porce).getPropertyValue('width');
        let limite= parseInt(elementStyle);
        for (let j = 0; j < limite; j++) {
            document.getElementById("anim"+index).style.display="block";
            setTimeout("document.getElementById('anim"+index+"').style.width = '" +j+ "px'", j * 10);
        }
    }
    
}

function Init(){
    document.getElementById('about').style.display = 'none';
    document.getElementById('resume').style.display= 'none';
    document.getElementById('contacto').style.display= 'none';
}

function about(){
    Init();
    document.getElementById('about').style.display = 'block';
}

function contact(){
    Init();
    document.getElementById('contacto').style.display = 'block';
}


/*
function deplazamiento(div){
    for (let i = 0; i < 100; i++) {
        setTimeout("document.getElementById('"+div+"').style.opacity = '" + (i / 10) + "'", i * 100);
    }
}
function ocultar() {
    for (i = 10; i >= 0; i--){
     setTimeout("document.getElementById('tab-data-wrap').style.opacity = '" + (i / 10) + "'", (10 - i) * 100);
    }
}*/