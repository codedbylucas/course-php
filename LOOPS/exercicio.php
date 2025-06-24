<?php

// $multiplicador = 1;
// $tabuada = 5;
// while ($multiplicador <= 10) {
//     $resultado = $tabuada * $multiplicador;
//     echo $tabuada.'x'.$multiplicador. ' é igual a: '.$resultado.'</br>';
//     $multiplicador++;
// }

// $soma = 0;
// $contador = 1;
// while ($contador <= 20) {
//     echo 'O soma é igual a: '.$soma.', e a contador e igual a: '.$contador.'</br>';
//     $soma += $contador;
//     $contador++;
// }

// echo 'A soma e: '.$soma;

// $contador = 1;
// for ($contador = 1; $contador <= 10; $contador++) {
//     echo $contador;
// }

// $asterisco = '*';

// for ($linha = 1; $linha <= 10; $linha += 1) {
//     for ($colum = 0; $colum <= $linha; $colum++) {
//        echo $asterisco;
//     }
//     echo '</br>';
// }

// $array = [1, 2, 3, 4, 5];
// $resultado = 0;
// foreach ($array as $numero) {
//     $resultado += $numero; 
// }

// echo $resultado;


$produtos = [   
    'Produto1' => 10,   
    'Produto2' => 20,   
    'Produto3' => 30
];

$subtotal = 0;
foreach($produtos as $nome => $valor){   

    switch($valor){
        case 10:
        $valor = ($valor * 1);
        break;
        case 20:
        $valor = ($valor * 2);
        break;
        case 30:
        $valor = ($valor * 3);
        break;
        default: $valor = $valor;
    }
    echo $nome.': '.$valor.'</br>';
    $subtotal += $valor;
      
    
}
    echo 'Subtotal: '.$subtotal; 