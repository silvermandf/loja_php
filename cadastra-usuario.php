<?php 
require_once("cabecalho.php"); 
require_once("banco-usuario.php"); 

$nomeUsuario = $_POST["nomeUsuario"];
$emailUsuario = $_POST["emailUsuario"];
$senhaUsuario = $_POST["senhaUsuario"];

if(insereUsuario($conexao, $nomeUsuario, $emailUsuario, $senhaUsuario)) { ?> 
	<p class="text-success">O usuário <?=$nomeUsuario?> foi adicionado com sucesso!</p>
<?php 
} else { 
	$msg = mysqli_error($conexao);
?>		
	<p class="text-danger">O usuário não foi adicionado: <?=$msg?></p>
<?php
} 
?>

<?php require_once("rodape.php"); ?>  