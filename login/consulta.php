<?php
session_start();
$con=mysqli_connect("localhost","root","","");//conexão para busca

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM clientes WHERE nome like '%$filtro%'";
$result = mysqli_query($con,$sql);
$registros = mysqli_num_rows($result);
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

        </ul>
        </nav>
        <section>
                <h1>Lista de Cadastro</h1>
                <hr><br><br>
                <form method="get" action="">
                    Pesquise por telefone: <input type="text" name="filtro" class="campo" required autofocus>
                    <input type="submit" value="Pesquisar" class="btn">
                </form>
<?php

print "Resultado da pesquisa com a palavra <strong>$filtro</strong>.<br>";
print "Resultado da pesquisa";
print ": $registros registros encontrados.";
print "<br><br>";

// Numeric array
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
        print "<article>";
        print "Id: $row[0]<br>";
        print "Nome: $row[1]<br>";
        print "Sobre nome: $row[2]<br>";
        print "Tel: $row[3]<br>";
        print "Email: $row[4]<br>";
        print "Produto: $row[5]<br>";
        print "Valor: $$row[6]<br>";
        print "Tipo: $row[7]<br>";
        print "Parcela: $row[8]<br>";
        print "Desconto: $row[9]<br>";
        print "Promoção: $row[10]<br>";
        print "Entrada: $row[11]<br>";
        print "Obs: $row[12]<br>";
        print "</article>";

}
// Free result set
mysqli_free_result($result);

mysqli_close($con);

?>
<br>
        </section>
        </div>
 </body>
</html>

