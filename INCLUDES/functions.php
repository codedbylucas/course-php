<?php 

function verificarIdade(int $anoNascimento) : int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

//Calcular salario anual
function calcularSalarioAnual(float $salario_mensal) : string
{
    $salario_anual = $salario_mensal * 12;
    return numeroMonetario($salario_anual);
}

//Quantos anos faltam para se aposentar
function calcularAposentadoria(string $sexo, int $anoNascimento) : int
{
    $idade = verificarIdade($anoNascimento);
    $aposentadoria = null;
    if ($sexo == 'M') {
        return $aposentadoria = IDADE_APOSENTADORIA_MASCULINA - $idade;
    } else {
        return $aposentadoria = IDADE_APOSENTADORIA_FEMININA - $idade;
    }
    // $aposentadoria = ($sexo == 'M') ? IDADE_APOSENTADORIA_MASCULINA - $idade : IDADE_APOSENTADORIA_FEMININA - $idade;
}

//Transformar um numero em valor monetario

function numeroMonetario (int $numero) : string{
    
    return number_format($numero, 2, '.', ',');
}