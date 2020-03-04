<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root'); //usuario de acesso 
define('SENHA', '');//senha de acesso
define('DB', '');//nome do banco

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');//conexão mysql(eu uso MariaDb)