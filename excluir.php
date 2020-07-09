<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include_once "fontes/conexao.php";

$id = base64_decode($_GET["id"]);

$sql = "DELETE FROM produto WHERE id = ".$id;

if(mysql_query($sql,$con))
	echo "Excluido com sucesso!";
else
	echo "Erro ao excluido!";

mysql_close($con);
?>
<br /><a href="consultar.php">Voltar</a>