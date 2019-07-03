<?php require_once("cabecalho.php"); ?>

<h1>Formulário de cadastro de usuário</h1>
<form action="cadastra-usuario.php" method="post">
	<table class="table">
		<tr>
			<td>Nome</td>
			<td><input class="form-control" type="text" name="nomeUsuario"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input class="form-control" type="email" name="emailUsuario"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="password" name="senhaUsuario"></td>
		</tr>
		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php") ?>