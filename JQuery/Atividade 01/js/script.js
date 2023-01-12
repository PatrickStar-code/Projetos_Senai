// $(document).ready(function () {
//     // $("#Azul").click(function(){
//     //     $(".lorem").css('background-color','blue').css('color','white')

//     // })

//     // $("#limpar").click(function(){
//     //     $(".lorem").html('')
//     // })

//     // $("#Apagar").click(function(){
//     //     $(".lorem").remove()
//     // })

// })


$("#up").on("click", function () {
    $('.pacman').animate({ top: '-= 100px' })
})

$("#bot").on("click", function () {
    $('.pacman').animate({ top: '+= 100px' })
})

$("#left").on("click", function () {
    $('.pacman').animate({ left: '-= 100px' })
})

$("#right").on("click", function () {
    $('.pacman').animate({ right: '-= 100px' })
})