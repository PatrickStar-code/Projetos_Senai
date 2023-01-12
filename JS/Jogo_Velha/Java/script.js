const player1 = 'X'
const player2 = 'O'
var Vezjogador = player1
var GameOver = false
const VitoriaComb = [
    [0,1,2],
    [3,4,5],
    [6,7,8], 
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6],
]

iniciar()

function iniciar() {
    var posicao = document.getElementsByClassName('bloco01')

    if (GameOver) { return; }
    for (let i = 0; i < posicao.length; i++) {
        posicao[i].addEventListener('click', function () {
            if (this.getAttribute('jogada') == '') {
                if (Vezjogador == player1) {
                    this.innerHTML = '<img src="/img/X.png" alt="X" width="100%"></img>'
                    this.setAttribute('jogada', player1)
                    Vezjogador = player2
                }
                else {
                    this.setAttribute('jogada', player2)
                    this.innerHTML = '<img src="/img/O.png" alt="O" width="100%"></img>'
                    Vezjogador = player1
                }
            }
            resultado()
        })

    }
}


function resultado() {

}