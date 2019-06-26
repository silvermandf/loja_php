<html>
<head>
	<meta charset="utf-8">
	<title>Sobre a Loja</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/loja.css"> 
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <a class="navbar-brand" href="index.php">Minha Loja</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<?php if(isset($_COOKIE["usuario_logado"]) && $_COOKIE["usuario_logado"] == true) { ?>
							<li><a href="logout.php?sair=true">Sair</a></li> 
					<?php } ?>

				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="principal">