var tentativa = 0
function login(){
    var login = document.getElementById('login').value
    var senha = document.getElementById('senha').value

    console.log(tentativa)

    if(login == 'admin' && senha == '123'){
        document.getElementById('Resultado').innerText = 'Bem Vindo'
    }
    else{
        tentativa += 1
    }
    
    if(tentativa == 3){
        document.getElementById('Resultado').innerText = 'Acesso negado'
        document.getElementById('botao').style.display = 'none'
    }
}