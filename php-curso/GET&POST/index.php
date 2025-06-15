<?php

if(!empty($_POST['login']) && !empty($_POST['senha'])){
    $login = htmlspecialchars($_POST['login']);
    $senha = htmlspecialchars($_POST['senha']);
    $mensagem = '';

    if($login == 'admin' && $senha == 'admin') {
        $mensagem = 'Logado com sucesso';
    }else {
        $mensagem = 'Login incorreto';
    }
    
    
}else {
    $mensagem = 'Preencha todos os campos';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <label for="">Login: </label>
        <input type="text" name="login" placeholder="Login" value="<?= $login ?? '' ?>">
        <br>
        <label for="">Senha: </label>
        <input type="text" name="senha" placeholder="Senha" value="<?= $login ?? '' ?>">

        <input type="submit" value="Enviar">
    </form>
    
    <?php
        if(!empty($mensagem)) {
            echo $mensagem;
        }
    ?>
</body>
</html>