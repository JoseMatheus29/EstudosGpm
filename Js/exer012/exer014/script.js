function carregar(){
    var msg = window.document.querySelector('div#msg')
    var img = window.document.querySelector('img#img')
    var data = new Date()
    var hora = data.getHours()
    msg.innerHTML = `Agora são ${hora} horas`
    if(hora >= 0 && hora < 12 ){
        img.src = "img/Manha.jpg"
    }else if(hora >=12 && hora < 18){
        img.src = "img/Tarde.jpg"
    }else{
        img.src = "img/noite.jpg"
    }
}

