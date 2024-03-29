<?php 
require_once("cabecalho.php"); 
require_once("banco-categoria.php"); 
require_once("logica-usuario.php");

verificaUsuario();

$categorias = listaCategorias($conexao);
?> 

<?php if(isset($_GET["sair"]) && $_GET["sair"] == true) { ?>
	<p class="alert-danger">Você saiu do sistema.</p>
	<?php 
		unset($_COOKIE["usuario_logado"]);
		die();
	?>
<?php } ?>

<h1>Formulário de produto</h1>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<tr>
			<td>Nome</td> 
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preço</td>
			<td><input class="form-control" type="number" name="preco"></td>
		</tr>
		<tr>
			<td>Descrição</td>
			<td><textarea class="form-control" name="descricao"></textarea></td>
		</tr>
		<tr>
			<td>Situação do produto</td>
			<td><input type="checkbox" name="usado" value="true">Usado</td>
		</tr>
		<tr>
			<td>Categoria</td>
			<td>
				<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria) : ?>
						<option value="<?=$categoria['id']?>"> <?=$categoria['nome']?></option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php require_once("rodape.php") ?>