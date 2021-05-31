<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHAT - LOGIN</title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/login.css">
</head>
<body>
    <div class="container">
        <h4>Login</h4>
        <?php if(!empty($msg)):?>
            <div class="warning">
                <?= $msg; ?>
            </div>
        <?php endif;?>
        <form action="<?= BASE_URL ?>login/signin" method="post">
            Usuário:<br>
            <input type="text" name="username"><br><br>
            Senha:<br>
            <input type="password" name="pass"><br><br>
            <input type="submit" value="Entrar">
        </form>
        <br><br>
        <a href="<?= BASE_URL ?>login/signup">Cadastre-se</a>
    </div>
</body>
</html>