<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>
<?php include("banco-categoria.php"); ?>

<?php 
	if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true") :
?>
		<p class="alert-success"> Produto apagado com sucesso.</p>
<?php		
	endif 
?> 

<table class="table table-striped table-bordered">
	<?php
		$produtos = listaProdutos($conexao);
		foreach($produtos as $produto) :
			$usado = $produto['usado'] ? "Usado" : "Novo";
			
	?>	
			<tr>
				<td><?= $produto["nome"] ?></td>
				<td><?= $produto["preco"] ?></td>
				<td><?= substr($produto["descricao"], 0, 40); print("...") ?></td>
				<td><?= $produto["categoria"] ?></td>
				<td>
					<input type="hidden" name="usado" value="true"> <?= $usado ?>
				</td>
				<td>
					<a href="produto-altera-formulario.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Alterar
				</td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?= $produto['id'] ?>">
						<button class="btn btn-danger">Remover</button>
					</form>
				</td>
			</tr>
	<?php
		endforeach
	?>
</table>

<?php include("rodape.php"); ?>