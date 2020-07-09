<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="script.js"></script>
<h2>Cadastro de Produtos</h2>
<hr />
<form action="gravar.php" method="post" name="f" onSubmit="return validarProduto();">
Nome...: <input type="text" name="nome" />
<br /><br />
Preço...: <input type="text" name="preco" />
<br /><br />
Custo...: <input type="text" name="custo" />
<br /><br />
Categoria...: 
<select name="categoria">
	<option value="Informatica" />Informatica
	<option value="Filmes" />Filmes
	<option value="Livros" />Livros
	<option value="Musica" />Musica
	<option value="Outros" />Outros
</select>
<br /><br />
<input type="submit" value="Gravar Produto" />
</form>
<div id="resp"></div>
<br />
<a href="consultar.php">
Consultar</a>