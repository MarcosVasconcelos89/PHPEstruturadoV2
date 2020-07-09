<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="script.js"></script>
<?php
$id = base64_decode($_GET["id"]);
include_once"fontes/conexao.php";
$sql = "SELECT * FROM produto WHERE id = ".$id;
$rs = mysql_query($sql,$con);
$row = mysql_fetch_array($rs);
?>
<h2>Cadastro de Produtos</h2>
<hr />
<form action="editar2.php" method="post" name="f" onSubmit="return validarProduto();">
Nome...: <input type="text" name="nome" value="<?php echo $row["nomeproduto"]; ?>" />
<br /><br />
Preço...: <input type="text" name="preco" value="<?php echo $row["preco"]; ?>" />
<br /><br />
Custo...: <input type="text" name="custo" value="<?php echo $row["custo"]; ?>" />
<br /><br />
Categoria...: 
<select name="categoria">
	<option value="Informatica" <?php echo ($row["categoria"] == "Informatica")?"selected":""; ?> />Informatica
	<option value="Filmes" <?php echo ($row["categoria"] == "Filmes")?"selected":""; ?>  />Filmes
	<option value="Livros" <?php echo ($row["categoria"] == "Livros")?"selected":""; ?> />Livros
	<option value="Musica" <?php echo ($row["categoria"] == "Musica")?"selected":""; ?> />Musica
	<option value="Outros" <?php echo ($row["categoria"] == "Outros")?"selected":""; ?> />Outros
</select>
<br /><br />
<input type="submit" value="Editar Produto" />
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
</form>
<div id="resp"></div>
<br />
<a href="consultar.php">
Voltar</a>