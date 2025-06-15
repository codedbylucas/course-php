<?php
session_start();

//USUARIO VALIDO ADMIN E ADMIN

if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);
    $tema = $_POST['tema'];

    if ($usuario == 'admin' && $senha == 'admin') {
        $_SESSION['usuario'] = $usuario;
        setcookie('cookieTema', $tema);
        header('Location: welcome.php');
        exit;
    } else {
        echo 'Usuario ou senha incorretos';
    }
} else {
    echo 'Preencha os campos';
}
