<?php

$tecnologia = ['HTML', 'CSS', 'PHP', 'JAVASCRIPT'];
$linguagens = ['PHP', 'JAVASCRIPT'];
$sucesso = null;
$erro = null;
$tec = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tec = $_POST['tec'] ?? [];

    if (empty($tec)) {
        $erro = 'Escolha alguma linguagem';
    } elseif (empty($tec)) {
        $erro = 'Preencha todos os campos';
    } elseif (count($tec) < 2) {
        $erro = 'Selecione pelo menos duas linguagens';
    }
    $linguagensInvalidas = [];
    foreach ($tec as $linguagemSelecionada) {
        if (!in_array($linguagemSelecionada, $linguagens)) {
            $linguagensInvalidas[] = $linguagemSelecionada;
            $erro = implode(', ', $linguagensInvalidas) . ' Não é uma linguagem válida';
        }
    }

    if (empty($erro)) {
        $sucesso = 'Deu certo';
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

<body>
    <h1>Escolha somente linguagens de progamação</h1>
    <form method="POST">
        <select name="tec[]" multiple>
            <?php foreach ($tecnologia as $langue): ?>
                <option value="<?= $langue ?>" <?= in_array($langue, $tec) ? 'selected' : '' ?>>
                    <?= $langue ?>
                </option>
            <?php endforeach; ?>
        </select>


        <input type="submit" value="Enviar">
        <?php if (!empty($sucesso)): ?>
            <p style="color: green;">
                <?= $sucesso ?>;
            </p>
        <?php endif; ?>
        <?php if (!empty($erro)): ?>
            <p style="color: red;">
                <?= $erro ?>
            </p>
        <?php endif; ?>
    </form>



</body>

</html>