
<?php

// ---------------------------Array-------------------------------------------------------------------------------------

// $array = ['Lucas', 'Dudo', 'Kaka'];

// $arrayTrocandoIndices = [
//    'Lucas' => 'Você acessou Lucas pelo indice Lucas',
//    'Dudo' => 'Você acessou Dudo pelo indice Dudo',
//    'Kaka' => 'Você acessou Lucas pelo indice Kaka',
// ];

// $arrayAtibuindoArray = [
//    'Lucas' => [
//       'nome' => 'Lucas',
//       'idade' => 21,
//       'cidade' => 'Douradina'
//    ],
//    'Dudo' => [
//       'nome' => 'Dudo',
//       'idade' => 21,
//       'cidade' => 'Douradina'
//    ],
//    'Kaka' => [
//       'nome' => 'Kaka',
//       'idade' => 21,
//       'cidade' => 'Douradina'
//    ],
// ];

// echo '<pre>';
// var_dump($arrayAtibuindoArray['Kaka']['cidade']);
// echo '</pre>';

//Funções de array

// array_push() = Adiciona um item no array
// Podemos atribuir ou substituir um item passando a variavel e o valor tambem EX: $arrayFrutas[1] = Laranja
// array_shift() = Remove o primeiro item da lista
// array_pop() = Remove o ultimo item da lista
// cout() = Conta os itens do array
// in_array() = Busca um item especifico no array
// array_merge() = Ela faz a junção de 2 arrays

// $arrayVerdura = ['Alface', 'Beteraba'];
// $arrayFrutas = ['Laranja', 'Banana', 'Maça'];
// $fruta = 'Maça';

// $push = array_push($arrayFrutas, 'Uva');

// $arrayFrutas[4] = 'Pessego';

// $shift = array_shift($arrayFrutas);

// $pop = array_pop($arrayFrutas);

// $contadorArray = count($arrayFrutas);
// $verificaArray = in_array($fruta, $arrayFrutas);
// $juntarArray = array_merge($arrayFrutas, $arrayVerdura);

// echo '<pre>';
// var_dump($arrayFrutas);
// var_dump($contadorArray);
// var_dump($verificaArray);
// var_dump($juntarArray);
// echo '</pre>';

//Exercicios

// $cidades = ['Maringa', 'São Paulo', 'Londrina', 'Rio de janeiro', 'Espirito Santo'];
// echo $cidades[2];

// $alunos = [
//    'Lucas' => 13,
//    'Dudo' => 17,
//    'Kaka' => 76
// ];
// echo '<pre>';
//    print_r($alunos['Dudo']);
// echo '</pre>';

// $cores = ['Azul', 'Verde', 'Preto'];
// array_push($cores, 'Branco');
// $cores[] = 'Adicionando com atribuicao';
// array_shift($cores);
// echo '<pre>';
//    print_r($cores);
// echo '</pre>';

// $precos = [
//    'Computador' => 1500,
//    'Teclado' => 200,
//    'Mouse' => 100
// ];
// $precos['Computador'] += 10;
// $precos['Teclado'] -= 1;
// $precos['Mouse'] = $precos['Computador'] - 1300;
// echo '<pre>';
//    print_r($precos);
// echo '</pre>';