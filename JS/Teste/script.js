
function func(){
    var nome = 'Zé',idade = 12,telefone = '32';
    console.log('Nome:',nome,'Idade:',idade,'Telefone:',telefone);
}

function sum(){
    var  Valor1  = Number(document.getElementById('v1').value) 
    var  Valor2 = Number(document.getElementById('v2').value) 
    var  Valor3 = Number(document.getElementById('v3').value) 

    var Resultado = (Valor1   + Valor2 + Valor3)/3
    document.getElementById('resultado').innerHTML = Resultado.toFixed(2)
}

function mudacor(elemento,cor){
    document.getElementById(elemento).style.background = cor 
}

function remover(id){

}

function gerarcor(opacidade = 1){
    let r = Math.random() * 255;
   let g = Math.random() * 255;
   let b = Math.random() * 255;

   return `rgba(${r}, ${g}, ${b}, ${opacidade})`;
}