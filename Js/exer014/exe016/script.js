function contar(){
    var numero = document.getElementById('numeros').value
    var tabuada = document.getElementById('tabuada')
    for(c = 1; c< 10; c++){
        tabuada.innerHTML += `${numero} x ${c} = ${numero * c} \n`
    }
}