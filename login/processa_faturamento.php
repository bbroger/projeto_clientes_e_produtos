<?php
session_start();
require_once 'conexao.php';

$nome       =$_POST['nome_cliente'];
$sobrenome  =$_POST['sobrenome'];
$telefone   =$_POST['telefone'];
$subtotal   =$_POST['subtotal'];
$desconto	=$_POST['desconto'];
$vendedor	=$_POST['vendedor'];
$pais   	=$_POST['pais'];
$estado     =$_POST['estado'];
$bairro		=$_POST['bairro'];
$cep	    =$_POST['cep'];
$rua		=$_POST['rua'];
$numero		=$_POST['numero'];
$obs        =$_POST['obs'];


$sql = "INSERT INTO fatura(nome_cliente, sobrenome, telefone, subtotal, desconto, vendedor, pais, estado, bairro, cep, rua, numero, obs) VALUES('$nome_cliente', '$sobrenome', '$telefone', '$subtotal', '$desconto', '$vendedor', '$pais', '$estado', '$bairro', '$cep', '$rua', '$numero', '$obs')";
mysqli_query($conexao, $sql);
//{
//header('Location: index.php');
//}
$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

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
		<a href="cadastro.php"><li>Cadastro</li></a>
		<a href="consulta.php"><li>Consulta</li></a>
	</ul>
	</nav>
	<section>
		<h1>Confirmação de Cadastro</h1>
		<hr><br><br>
		<?php
		if($linhas == 1){
			print "Cadastro efetuado com sucesso!";
		}else{
			print "Cadastro não efetuado!. <br> Já existe usuario com esse telefone!";
		}

		?>
		<br>
	</section>
	</div>
 </body>
</html>
