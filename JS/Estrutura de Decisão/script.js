var pessoas = ['Ana', 'Bruno', 'Carlos', 'Daniel']
var entidades = []
var posicao = entidades.length;

function avaliar() {
    var salario = document.getElementById('salario').value
    var idade = document.getElementById('idade').value

    if (salario < 1000) {
        document.getElementById('resposta').innerHTML = 'Aumento de 20%'
    };

    if (salario < 1000 && idade < 30) {
        document.getElementById('resposta').innerHTML = 'Aumento de 30%'
    };
}

function login() {
    var usuario = document.getElementById('usuario').value
    var senha = document.getElementById('Senha').value

    if (usuario == 'admin' && senha == 123) {
        document.getElementById('confirmacao').innerText = 'Bem Vindo!'
    }
    else {
        document.getElementById('confirmacao').innerText = 'Error 404'
    }
}

function media() {
    var n1 = Number(document.getElementById('n1').value)
    var n2 = Number(document.getElementById('n2').value)
    var media = Number((n1 + n2) / 2)

    if (media >= 60) document.getElementById('media').innerHTML = 'Aprovado'
    else if (media < 40) document.getElementById('media').innerHTML = 'Reprovado'
    else document.getElementById('media').innerHTML = 'Recuperação'

}

function confirmar() {
    var opcao = document.getElementById('pag').value

    switch (opcao) {
        case 'boleto':
            document.getElementById('pagamento').innerText = 'Boleto'
            break;

        case 'pix':
            document.getElementById('pagamento').innerText = 'Pix'
            break

        case 'credito':
            document.getElementById('pagamento').innerText = 'Credito'
            break

        case 'debito':
            document.getElementById('debito').innerText = 'Debito'
            break

        default:
            break;
    }
}

function vetor() {
    for (let i = 0; i < pessoas.length; i++) {
        document.getElementById('pessoa').append = pessoas[i] + ""

    }
}

function aleatorio() {
    //   console.log((Math.random()*100).toFixed(0))

    for (let i = 0; i <= 10; i++) {
        var valor = (Math.random() * 100).toFixed(0);
        document.getElementById('aleatorioa').append(valor + ' ')

    }
}

function armazenar() {

    for (let i = posicao; i < posicao + 5; i++) {
        entidades[i] = window.prompt("Entrada de dados", "")
    }

    console.log(entidades);
    posicao = entidades.length
}

function computador(){
    const Computador = {processador :"Intel Core I9",ram:"16GB",ssd:"512GB"}

    for(let x in Computador){
        console.log(x,":",Computador[x])
    }
}

function mostrarPalavra(){
    var palavra = 'alagoa'
    var a = '21#213'
    var o = '%¨&%$'
        for(x of palavra){
            if(x=='a') console.log(a)
            else if(x == 'o') console.log(o)
            else console.log(x)
        }
}

/*function numeros(){
    let i = 0
    var text = ''

    while(i < 10){
        text = 'O numero é '+ i
        i++

        console.log(text)
    }   
}*/

function numeros(){
    let i = 100
    var text = ''
    do{
        text+='O Numero é'+i;
        i++
    }
    while(i<10)console.log(text)
}