<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="script.js"></script>
<h2>Consultar Produto</h2>
<form action="consultar.php" method="post">
Nome...: <input type="text" name="nome" />
<br />
<input type="submit" value="Consultar" />
</form>
<hr />
<?php
//So vou listar os dados quando o usuario clicar no botao
if(!empty($_POST["nome"])){
	$nome = $_POST["nome"]."%";
	
	$sql = "SELECT * FROM produto 
			WHERE nomeproduto LIKE '".$nome."'";
	include_once "fontes/conexao.php";
	$rs = mysql_query($sql,$con);
	//verifica se numero de linhas do retorno da consulta e maior que 0
	if(mysql_num_rows($rs) > 0){
?>
	<table width="100%">
    	<tr>
        	<th>Nome</th>
        	<th>Preço</th>
        	<th>Custo</th>
        	<th>Categoria</th>
        	<th></th>
        	<th></th>
        </tr>
<?php
		while($row = mysql_fetch_array($rs)){
?>
		<tr>
        	<td><?php echo $row["nomeproduto"]; ?></td>
        	<td><?php echo $row["preco"]; ?></td>
        	<td><?php echo $row["custo"]; ?></td>
        	<td><?php echo $row["categoria"]; ?></td>
        	<td>
<a href="#" onClick="excluir('<?php echo base64_encode($row["id"]); ?>')">
            Excluir</a></td>
        	<td>
<a href="editar.php?id=<?php echo base64_encode($row["id"]); ?>">
            Editar</a></td>
        </tr>
<?php		
		}
?>
    </table>
<?php
	}else{
		echo "Nenhum produto encontrado";
	}
}
?>
<br />
<a href="index.php">
Voltar
</a>