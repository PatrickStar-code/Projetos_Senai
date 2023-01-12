var ideal

function calcular() {
    var altura = document.getElementById("Altura").value
    var peso = document.getElementById("Peso").value
    var imc = peso / (altura * altura)
    console.log(imc)

    if(imc <= 18.5){
       ideal = "Baixo peso"
    }
    else if(imc >= 18.5 && imc <= 24.9){
        ideal = "Peso Ideal"
    }
    else if(imc >= 25 && imc <= 29.9){
        ideal = "   Sobrepeso"
    }
    else if(imc >= 30 && imc <= 34.9){
        ideal = "Obeso"
    }
    else if(imc >= 35 && imc <= 39.9){
        ideal = "Obesidade Severa"
    }
    else{
        ideal = "Obesidade Morbica"
    }

    document.getElementById('resposta').innerHTML = "Seu IMC  é " + imc.toFixed(2-) + ",E vocé se encontra na situação " + ideal
}


