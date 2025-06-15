<?php


$array = ['Lucas', 'Gabriel', 'Silva', 'Santos'];

foreach ($array as $dados) {
    // echo $dados;
}

//ARRAY ASSOCIATIVO
$dados = [
    'nome' => 'Lucas Gabriel Silva',
    'idade' => 19
];

foreach ($dados as $chave => $item) {
    echo $chave.' >= '.$item.'</br>';
}