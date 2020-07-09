<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//PASSO 1_ Conectar no Banco (Abrir o MYSQL e a BASE)
//PASSO 2_ Resgatar os valores do formulario
//PASSO 2.1_ Validar os Dados
//PASSO 3_ Montar o SQL (query) para a Gravação
//PASSO 4_ Gravar o SQL no Banco
//PASSO 5_ Fechar conexao com o Banco (desconectar)

include_once "fontes/conexao.php";

$nome = trim($_POST["nome"]);
$preco = trim($_POST["preco"]);
$custo = trim($_POST["custo"]);
$categoria = trim($_POST["categoria"]);

$sql = "INSERT INTO produto VALUES(NULL,'".$nome."',
		".$preco.",".$custo.",'".$categoria."')";
		
if(mysql_query($sql,$con))
	echo "Gravado com sucesso";
else
	echo "Erro ao gravar";
	
mysql_close($con);
?>
<br /><a href="index.php">Voltar</a>