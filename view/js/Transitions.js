function AboutMe() {
    
    document.getElementById('AboutMe').style.display = 'block';
    document.getElementById('AboutMe').style.opacity = '0';
    /*document.getElementById('AboutMe').style.animationDuration = '3s';
    document.getElementById('AboutMe').style.animationName= 'slidein';*/
    for (i = 0; i <= 10; i++){
    setTimeout("document.getElementById('AboutMe').style.opacity = '" + (i / 10) + "'", i * 100)
    }
}

function Init(){
    document.getElementById('AboutMe').style.display = 'none';
}