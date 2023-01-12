//Clientes

//Demostrando o toast de processo cancelado
$('.toast-push-erro').on('click', function (e) {
    $('.toast-erro').toast('show');
});

//processamento assíncrono//Segundo plano
async function deletar_cliente(id_del_cliente) {
    //Teste ID
    console.log(id_del_cliente)

    //Aguarda o processamneto await = aguardar , fetch responsavel pela requisição
    //Chamando arquivo php responsavel por excluir
    //Retornando como uma const 
    const dados = await fetch("apagar.php?id=" + id_del_cliente)

    document.location.reload(true)
};


//Categorias

async function deletar_categoria(id_del) {
    //Teste ID
    console.log(id_del)

    //Aguarda o processamneto await = aguardar , fetch responsavel pela requisição
    //Chamando arquivo php responsavel por excluir
    //Retornando como uma const 
    const dados = await fetch("apagar.php?id=" + id_del)

    document.location.reload(true)
};

//Fim categoria

/*Produtos*/

async function deletar_produtos(id_del_produto) {
    //Teste ID
    console.log(id_del_produto)

    //Aguarda o processamneto await = aguardar , fetch responsavel pela requisição
    //Chamando arquivo php responsavel por excluir
    //Retornando como uma const 
    const dados = await fetch("apagar.php?id=" + id_del_produto)

    document.location.reload(true)
};



//Fim Produtos

/*Pedido*/

async function deletar_pedido(id_del_pedido) {
    //Teste ID
    console.log(id_del_pedido)

    //Aguarda o processamneto await = aguardar , fetch responsavel pela requisição
    //Chamando arquivo php responsavel por excluir
    //Retornando como uma const 
    const dados = await fetch("apagar.php?id=" + id_del_pedido)

    document.location.reload(true)
};

/*Fim pedido*/

