<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $senha = $_POST['senha'];
    $hash = '$2y$10$XOQAJ.MoGm6Ngz1eKLUOb.JACpZ6BbA1PDKfNtIZTjKwDl24z6VJu';
    encriptamento($senha);
    echo $senha;

    if (password_verify($senha, $hash)) {
        echo 'Senha correta';
    }else {
        echo 'Senha errada';
    }
};

function encriptamento($senha) {
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
}
 