function carregar(){
    var data = new Date()
    var ano = data.getFullYear()
    var nasc = Number(document.getElementById("anoNasc").value)
    var recebgen = document.getElementsByName("genero")
    var gen = ""
    if(recebgen[0].checked){
        gen = 'feminino'
    }else{
        gen = 'masculino'
    }
    var img = document.getElementById("img")
    var idade = ano - nasc
    if(gen == 'masculino'){
        if(idade < 6){
            img.src = "img/bebeMenino.jpg"
        }else if(idade >= 6 && idade < 13){
            img.src = "img/criancaMenino.jpg"
        }else if(idade >= 13 && idade < 23){
            img.src = "img/jovemHomem.jpg"
        }else if(idade >= 23 && idade <60){
            img.src = "img/adultoHomem.jpg"
        }else if(idade > 60){
            img.src = "img/velhoHomem.jpg"
        }
    }else{
        if(idade < 6){
            img.src = "img/bebeMenina.jpg"
        }else if(idade >=6 && idade <13){
            img.src = "img/criancaMenina.jpg"
        }else if(idade >=13 && idade < 23){
            img.src = "img/jovemMulher.jpg"
        }else if(idade >=23 && idade <60){
            img.src = "img/adultaMulher.jpg"
        }else if(idade > 60){
            img.src = "img/velhoMulher.jpg"
        }
    }

}