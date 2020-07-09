<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$custo = $_POST["custo"];
$categoria = $_POST["categoria"];

$sql = "UPDATE produto SET 
		nomeproduto = '".$nome."' , 
		preco = ".$preco." ,
		custo = ".$custo." ,
		categoria = '".$categoria."' 
		WHERE id = ".$id;

	
include_once "fontes/conexao.php";

if(mysql_query($sql,$con))
	echo "editado com sucesso";
else
	echo "Erro";
mysql_close($con);
?>
<br /><a href="consultar.php">Voltar</a>