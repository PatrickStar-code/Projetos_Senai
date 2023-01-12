$(document).ready(function () {
    
$("#mensagem").submit(function (e) { 
    e.preventDefault();
      // Enviando Mensagens
      $.post("salvar_msg.php",{mensagem: $("#envio").val() },
      function () {
          // Realizar Scroll
          var element = $('#mensagens');
          element.animate({scrollTop: element.prop("scrollHeight")}, 500);
          $("#envio").val("")

      }
  );
});
  

palavra_proibidas = Array ("Corno","FDP","Viado");

var ultimaMensagem=0;

setInterval(function () {
    $.post('ler_mensagens.php', {last_id: ultimaMensagem}, function(resposta){
        try {
            // alert(resposta)
            var dados=JSON.parse(resposta);
            dados.forEach(mensagem => {
                ultimaMensagem=mensagem[0];
              
                var myArray = mensagem[4].split(" ")
                for (let i = 0; i < myArray.length; i++) {
                    for (let o = 0; o < palavra_proibidas.length; o++) {
                       if(myArray[i] == palavra_proibidas[o]){
                        console.log("proibido")
                        myArray[i] = "****"
                       }
                    }
                }
                texto_retorno = myArray.toString();
                texto = texto_retorno.replaceAll(","," ")
                $('#mensagens').append('<div class="flex mb-2"><div class="rounded py-2 px-3" style="background-color: #F2F2F2"> <p class="text-sm" style="color:'+mensagem[2]+'">'+mensagem[1]+'</p> <p class="text-sm mt-1">'+texto+'</p><p class="text-right text-xs text-grey-dark mt-1">'+mensagem[3]+'</p></div></div>');
            });
            var element = $('#mensagens');
            element.animate({scrollTop: element.prop("scrollHeight")}, 500);
        } catch (error) {
            console.log(error);
        }
    });
}, 1000);

});