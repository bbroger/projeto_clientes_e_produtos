<?php
session_start();
$con=mysqli_connect("localhost","root","izaias147","Mfcomercio");//conexão para busca

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM fatura WHERE id_fatura like '%$filtro%'";
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
                <h1>Lista de faturas</h1>
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
        print "Data do pedido: $row[1]<br>";
        print "Subtotal: $row[2]<br>";
        print "Desconto: $row[3]<br>";
        print "vendedor: $row[4]<br>";
        print "País: $row[5]<br>";
        print "Estado: $row[6]<br>";
        print "Bairro: $row[7]<br>";
        print "Cep: $row[8]<br>";
        print "Rua: $row[9]<br>";
        print "Numero: $row[10]<br>";
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

