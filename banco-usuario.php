<?php require_once("conecta.php");

function buscaUsuario($conexao, $email, $senha) {
	$senhaMd5 = md5($senha); 
	$email = mysqli_real_escape_string($conexao, $email); // serve para não permitir SQL injection
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

function insereUsuario($conexao, $nomeUsuario, $emailUsuario, $senhaUsuario) {
	$senhaMd5 = md5($senhaUsuario);
	$query = "INSERT INTO usuarios (nome, email, senha)
				VALUES ('{$nomeUsuario}', '{$emailUsuario}', '{$senhaMd5}')";
	$resultado = mysqli_query($conexao, $query);
	return $resultado; // retornar faz o resultado executar o mysqli_query
}

function alteraUsuario($conexao, $id, $nomeUsuario, $emailUsuario, $senhaUsuario) {
	$query = "UPDATE usuarios SET nome = '{$nomeUsuario}', email = '{$emailUsuario}', senha = '{$senhaUsuario}'
			  WHERE id =  '{$id}'";
}

