<?php 
	setcookie("usuario_logado"); // remove o cookie, caralho, deu trampo achar isso pois nem com unset($_COOKIE["usuario_logado"]) não deu.
	header("Location: index.php?sair=true");
	die();
