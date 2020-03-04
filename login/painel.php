<?php
session_start();
include('verifica_login.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>MfAdministration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
  <div id="contents">
    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

    <h1><a href="cadastro.php">inicio</a></h1>

<h2><a href="logout.php">Sair</a></h2>
  </div>
  </body>
</html>
