<?php
session_start();

//BEM VINDO LOGIN CASO ESTIVER LOGADO

if(empty($_SESSION['usuario'])){
    header('Location: index.php');
}

$cor = 'red';
if(!empty($_COOKIE['cookieTema'])){
    $tema = $_COOKIE['cookieTema'];

    if($tema == 'escuro'){
        $cor = '#333';
    }else {
        $cor = '#fff';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?= $cor ?>;">

    <h1>Seja bem vindo <?= $_SESSION['usuario'] ?></h1>
    <br>
    <a href="logout.php">Sair</a>
    
</body>
</html>