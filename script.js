// JavaScript Document
function validarProduto(){
	
	var mProd = /^[A-Z a-z]{3,50}$/;
	var mPreco = /^[0-9]+\.[0-9]{2,2}$/;

	var flag = 0;//todos os formularios esta corretos
	var msg = "";
	
	if(!f.nome.value.match(mProd)){
		msg += "Preecha o campo nome.<br />";
		flag = 1;//Erro no form
	}
	
	if(!f.preco.value.match(mPreco)){
		msg += "Preecha o campo preço.<br />";
		flag = 1;
	}
	if(!f.custo.value.match(mPreco)){
		msg += "Preecha o campo custo.<br />";
		flag = 1;
	}
	
	if(flag == 0){
		return true;
	}
	else
	{
		document.getElementById("resp").innerHTML = msg;
		return false;
	}
}

function excluir(idproduto){
	if(confirm('Deseja excluir este produto?')){
		location.href = 'excluir.php?id='+idproduto;
	}
}

