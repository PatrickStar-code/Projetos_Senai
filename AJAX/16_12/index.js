listar();

var element = $('#chat');
            element.animate({
                scrollTop: element.prop("scrollHeight")
            }, 500);

function listar() {
    $("#textarea").empty();
    $.get("listar.php",
        function (data) {
            var dados = JSON.parse(data);
            for (let i = 0; i < dados.length; i++) {
                $("#textarea").append('<div class="clearfix"><div class="bg-gray-300 w-3/4 mx-4 my-2 p-2 rounded-lg clearfix">' + dados[i] + '</div></div>');
            }
        }

    );
}

function verify_mesage() {
    $.get("verify.php",
        function (data) {
            dados = JSON.parse(data);
            for (let i = 0; i < dados.length; i++) {
                $("#textarea").append('<div class="clearfix"><div class="bg-gray-300 w-3/4 mx-4 my-2 p-2 rounded-lg clearfix">' + dados[i] + '</div></div>');
            }
        }
    );
}

setInterval(verify_mesage,1000);

$("#form").submit(function (e) {
    var texto_val = $("#mensagem").val();
    e.preventDefault();
    $.post("armazenar.php", { mensagem: texto_val },
        function (data) {
            element.animate({
                scrollTop: element.prop("scrollHeight")
            }, 500);
        }
    );
    $("#mensagem").val("");
});


