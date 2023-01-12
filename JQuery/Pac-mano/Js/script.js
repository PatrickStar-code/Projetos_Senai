
/*Debug*/

var x = 0
var y = 0

if(x<4){
$("#direita").on('click', function () {
    $(".pacman").animate({ left: '+=100px' });
    coordenadas = box.getBoundingClientRect()
    console.log('posição x', coordenadas.left, 'posição y', coordenadas.top)
})}

if(x<4)
$("#esquerda").on('click', function () {
    $(".pacman").animate({ left: '-=100px' });
    coordenadas = box.getBoundingClientRect()
    console.log('posição x', coordenadas.left, 'posição y', coordenadas.top)
})

$("#cima").on('click', function () {
    $(".pacman").animate({ top: '-=100px' });
    coordenadas = box.getBoundingClientRect()
    console.log('posição x', coordenadas.left, 'posição y', coordenadas.top)
})

$("#baixo").on('click', function () {
    $(".pacman").animate({ top: '+=100px' });
    coordenadas = box.getBoundingClientRect()
    console.log('posição x', coordenadas.left, 'posição y', coordenadas.top)
})      
