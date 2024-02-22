function contar(){
    var inicio = Number(document.getElementById('inicio').value)
    var fim = Number(document.getElementById('fim').value)
    var passo = Number(document.getElementById('passo').value)
    var resultado = document.getElementById('resultado')
    while(inicio < fim){
        resultado.innerHTML += inicio + "\u{1f449}"
        console.log(inicio)
        inicio+=passo

    }
    resultado.innerHTML += "\u{1f3c1}"

}