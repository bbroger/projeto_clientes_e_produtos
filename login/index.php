<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MfAdministration</title>
	<link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="css/estilo.css">

</head>

<body>
    <div id="contents">
        <h3 class="title has-text-grey">MfAdministration</a></h3><br>
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div class="notification is-danger">
                <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <div class="box">
            <form action="login.php" method="POST">
                <div class="field">
                    <div class="control">
                        <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                    </div>
                </div><br>

                <div class="field">
                    <div class="control">
                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                    </div>
                </div><br>
                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    </section>
</body>

</html>
