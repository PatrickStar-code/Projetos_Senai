
// $(function() {
//     setTime();
//     function setTime() {
//        setTimeout(setTime, 1000);
//        $('.teste').html(agora); 
//     }
//   });

$("#Cel").mask('(00)00000-0000');
$("#cpf").mask("000.000.000-00");
$("#Cep").mask("00000-000")


$(function () {
    var cep = $("#Cep").val()
    
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        // $("#ibge").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#Cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                // $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                        // $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});

    $("#btn-enviar").click(function () {
        var nome = $("#Nome").val()
        var cpf = $("#cpf").val()
        var celular = $("#Cel").val()
        var email = $("#email").val()

        var erros = 0

        if (nome == "") erros++
        if (cpf == "") erros++
        if (celular == "") erros++
        if (email == "") erros++


        if (erros == 0) {
            $("#form-cadastro").submit();
        }
        else {
            $('#modal_alert').modal('show');
        }
    })
