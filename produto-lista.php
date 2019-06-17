<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produto.php"); ?>
<?php include("banco-categoria.php"); ?>

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
		sort($produtos);
				
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
					
				</tr>
			</tbody>
	<?php
		endforeach
	?>
</table>

<?php include("rodape.php"); ?>