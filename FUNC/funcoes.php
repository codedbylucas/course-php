<?php
/**
 * @param float $n1 Primeiro numero a ser somado
 * @param float $n2 Segundo numero a ser somado
 * @param float $n3 Terceiro numero a ser somado
 * 
 * @return float Total das somas dos numeros
*/
function somar(float $n1, float $n2, float $n3 = 0):float
{
    $total = $n1 + $n2 + $n3;
    return $total;
}

echo 'A soma dos numeros é: '.somar(2, 3, 4) . '</br>';

/**
 * @param int $anoNascimento Ano do nascimento do individuo
 * @return int Idade do individuo
*/
function verificarIdade(int $anoNascimento) : int
{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

/**
 * @param int $anoNascimento Ano do nascimento
 * @param bool $acompanhado Se esta acompanhado true ou false
 * 
 * @return string Retorna uma String
*/
function segurancaBalada(int $anoNascimento, bool $acompanhado = false) : string
{

    $idadeNescessaria = 18;
    $idade = verificarIdade($anoNascimento);

    if ($idade >= $idadeNescessaria) {
        return 'Você tem ' . $idade . ' anos e pode entrar na balada.';
    } else if ($idade < $idadeNescessaria && $acompanhado == true) {
        return 'Você está acompanhado, pode entrar';
    } else {
        return 'Você tem ' . $idade . ' anos e não pode entrar na balada.';
    }
}

echo '2004: ' . segurancaBalada(2004);
echo '</br> 2002: ' . segurancaBalada(2002);
echo '</br> 2007: ' . segurancaBalada(2008);
echo '</br> 2009: ' . segurancaBalada(2009, true);

/**
 * @param string $nome Nome do individuo
 * @param string $sobrenome Sobrenome do individuo
 * @param int $idade Idade do individuo
 * 
 * @return string Retorna uma string com nome, sobrenome e idade
*/
function parametrosNomeados(string $nome, string $sobrenome, int $idade) : string 
{
    return $nome.$sobrenome.$idade;
}

echo parametrosNomeados(sobrenome: 'Gabriel', nome: 'Lucas', idade: 17);
