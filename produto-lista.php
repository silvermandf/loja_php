<?php 
require_once("cabecalho.php"); 
require_once("banco-produto.php"); 
require_once("banco-categoria.php");
require_once("logica-usuario.php"); 
?>

<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true") :
?>
		<p class="alert-success"> Produto apagado com sucesso.</p>
<?php		
	endif 
?> 

<table class="table table-striped table-bordered">
	<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Produto</th>
			<th>Preço</th>
			<th>Descrição</th>
			<th>Categoria</th>
			<th>Tipo</th>
		</tr>
	</thead>
	<?php
		$produtos = listaProdutos($conexao);
		sort($produtos); // ordena os produtos em ordem crescente do id, ou seja, na ordem que foram inseridos

		foreach($produtos as $produto) :
			$usado = $produto['usado'] ? "Usado" : "Novo";			
	?>	
		<tbody>
			<tr>
				<th scope="row"><?= $produto["id"] ?></th>
				<td><?= $produto["nome"] ?></td>
				<td><?= $produto["preco"] ?></td>
				<td><?= substr($produto["descricao"], 0, 40); print("...") ?></td>
				<td><?= $produto["categoria"] ?></td>
				<td>
					<input type="hidden" name="usado" value="true"> <?= $usado ?>
				</td>
				<?php if(usuarioEstaLogado()) { ?>
					<td>
						<a href="produto-altera-formulario.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Alterar</a>
					</td>
				<?php } ?>
				<?php if(usuarioEstaLogado()) { ?>
					<td>
						<form action="remove-produto.php" method="post">
							<input type="hidden" name="id" value="<?= $produto['id'] ?>">
							<button class="btn btn-danger">Remover</button>
						</form> 
					</td>
				<?php } ?>
			</tr>
	<?php
		endforeach
	?>
</table>

<?php include("rodape.php"); ?>