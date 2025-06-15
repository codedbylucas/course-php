<?php
require 'funcoes.php';

$erro = null;
$sucesso = null;

$arrayNormal = ['HTML', 'JAVASCRIPT', 'PHP'];
$linguagens = ['JAVASCRIPT', 'PHP'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //SANITIZAÇÃO
    $texto = htmlspecialchars($_POST['texto']);
    $texto = trim($texto);
    $opcao = $_POST['opcao'] ?? [];
    // $texto = filter_var($texto, FILTER_VALIDATE_EMAIL);
    print_r($opcao);
    if (empty($texto) && empty($opcao)) {
        $erro = 'Preencha todos os campos';
    } elseif (strlen($texto) < 2) {
        $erro = 'Seu texto tem que ser maior que dois caracteres';
    } elseif (strlen($texto) > 10) {
        $erro = 'Seu texto tem que ser no maximo 10 caracteres';
    } else {
        $sucesso = 'Validado com sucesso';
    }

    if (count($opcao) != 2) {
        $erro = 'Ecolha somente 2';
    }elseif(empty($opcao)) {
        $erro = 'Preencha todos os campos';
    }
    foreach ($opcao as $linguagemSelecionada) {
        if (!in_array($linguagemSelecionada, $linguagens)) {
            $erro = 'Não é uma linguagem válida';
        }
    }

    if (!$erro) {
        $sucesso = 'Deu certo';
    }



    // $arrayBanco = [ 
    //     ['codigo' => 'html', 'name' => 'HTML'], 
    //     ['codigo' => 'javascript', 'name' => 'JAVASCRIPT'], 
    //     ['codigo' => 'php', 'name' => 'PHP'], 
    // ];

    // $arrayApi = [ 
    //     'html' => 'HTML', 
    //     'javascript' => 'JAVASCRIPT', 
    //     'php' => 'PHP', 
    // ];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>

<body>

    <form method="POST">
        <h1>Formulario</h1>
        <label for="">Usuario</label>
        <input type="text" name="texto">

        <select name="opcao[]" multiple>
            <?php foreach ($arrayNormal as $index) : ?>
                <option value="<?= $index ?>"><?= $index ?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Enviar">
        <?php if (exibirErro($erro)) : ?>
            <p style="color: red;"><?= $erro ?></p>
        <?php endif; ?>

        <?php if (exibirErro($sucesso)) : ?>
            <p style="color: green;"><?= $sucesso ?></p>
        <?php endif; ?>

    </form>



</body>

</html>