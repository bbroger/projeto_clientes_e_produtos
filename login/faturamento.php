<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>MfAdministration</title>
	<link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/faturamento.css">
</head>

<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<a href="consulta.php">
					<li>Consulta</li>
				</a>
				<a href="fatura.php">
					<li>Consulta faturas</li>
				</a>
				<a href="faturamento.php">
					<li>Cadasto de fatura</li>
				</a>
				<!--<a href="edita.php"><li>Edita</li></a>-->
				<a href="https://www.google.com.br/maps">
					<li>Mapas</li>
				</a>
				<a href="painel.php">
					<li>Painel</li>
				</a>
				<a href="https://www.life360.com/">
					<li>GPS</li>
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
				<input type="text" name="nome_cliente" class="campo"><br>
				Sobre Nome<br>
				<input type="text" name="sobrenome" class="campo"><br>
				Telefone<br>
				<input type="text" name="telefone" class="campo"><br>
				Subtotal<br>
				<input type="text" name="subtotal" class="campo"><br>
				Desconto<br>
				<input type="text" name="desconto" class="campo"><br>
				Vendedor<br>
				<input type="text" name="vendedor" class="campo"><br>
				País<br>
				<input type="text" name="pais" class="campo"><br>
				Estado<br>
				<input type="text" name="estado" class="campo"><br>
				Bairro<br>
				<input type="text" name="bairro" class="campo"><br>
				Cep<br>
				<input type="text" name="cep" class="campo"><br>
				Rua<br>
				<input type="text" name="rua" class="campo"><br>
				Numero<br>
				<input type="text" name="subtotal" class="campo"><br>
				Obs<br>
				<input type="text" size="35" name="obs" class="campo">
				
				<br><br>
				<input type="submit" value="Salvar" class="btn">
		</section>
	</div>
</body>

</html>
