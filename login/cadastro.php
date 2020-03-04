<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>MfAdministration</title>
	<link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/estilo.css">
</head>

<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="consulta.php">
					<li>Consulta</li>
				</a>
				<!--<a href="edita.php"><li>Edita</li></a>-->
				<a href="https://www.google.com.br/maps">
					<li>Mapas</li>
				</a>
				<a href="painel.php">
					<li>Painel</li>
				</a>
				<a href="logout.php">
					<li>Sair</li>
				</a>
			</ul>
		</nav>
		<section>
			<h1>Cadastro</h1>
			<hr><br>
			<form method="POST" action="processa.php">
				Nome<br>
				<input type="text" name="nome" class="campo"><br>
				Sobre Nome<br>
				<input type="text" name="sobre_nome" class="campo"><br>
				Telefone<br>
				<input type="text" name="telefone" class="campo"><br>
				Email<br>
				<input type="text" name="email" class="campo"><br>
				Produto<br>
				<input type="text" name="produto" class="campo"><br>
				Valor<br>
				<input type="text" name="valor" class="campo"><br>
				Pagamento<br>
				<input type="text" name="pagamento" class="campo"><br>
				parcela<br>
				<input type="text" name="parcela" class="campo"><br>
				Desconto<br>
				<input type="text" name="desconto" class="campo"><br>
				promoção<br>
				<input type="text" name="promocao" class="campo"><br>
				Obs<br>
				<input type="text" name="obs" class="campo">
				<br><br>
				<input type="submit" value="Salvar" class="btn">
		</section>
	</div>
</body>

</html>
