const cks=Cookies.noConflict();

cks.set('total_vendas',5)
cks.set('valor_caixa',5)
console.log(cks.get('total_vendas'))
console.log(cks.get('valor_caixa'))