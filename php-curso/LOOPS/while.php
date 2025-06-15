<?php


$idade = 1;
while ($idade <= 18) {
  
    if($idade >= 18){
        echo 'Você ja pode ser preso, voce tem '.$idade.' anos. </br>';
    }else {
        echo 'Você ainda não pode ser preso, voce tem '.$idade.' anos. </br>';
    }

    $idade++;
}