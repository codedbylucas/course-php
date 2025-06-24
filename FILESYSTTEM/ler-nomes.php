<?php

//FUNCOES PARA LER UM ARQUIVO

//FUNCAO PARA ABRIR O ARQUIVO
$arquivo = fopen('nomes.txt', 'r');

//FUNCAO PARA VER QUANTIDADE DE BYTES DO ARQUIVO;
$bytes = filesize('nomes.txt');

//FUNCAO PARA LER O ARQUIVO E OS DADOS QUE TEM NELE
// $nomes = fread($arquivo, $bytes);

//FUNCAO PARA LER LINHA A LINHA DO ARQUIVO
// $nome1 = fgets($arquivo);
// print_r($nome1);

while ($linha = fgets($arquivo)) {
    echo $linha;
    echo '<br>';
}

fclose($arquivo);
