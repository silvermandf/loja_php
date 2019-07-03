<?php require_once("banco-produto.php"); 

	$id = $_POST["id"];
	removeProduto($conexao, $id);
	header("location: produto-lista.php?removido=true"); //sempre  colocar die depois de um location, SEMPRE!
	die();
?>
