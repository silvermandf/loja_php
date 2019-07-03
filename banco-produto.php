<?php require_once("conecta.php");

function listaProdutos($conexao) {
	$produtos = array();
	
	$query = 
		"SELECT 
			produtos.id,
		    produtos.nome, 
		    produtos.preco, 
		    produtos.descricao,
		    produtos.usado, 
		    categorias.nome as categoria 
		FROM 
		    produtos, categorias 
		WHERE 
		    produtos.categoria_id = categorias.id";

	$resultado = mysqli_query($conexao, $query);
	
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
	$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
	$query = "UPDATE produtos SET nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} WHERE id = '{$id}'";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}