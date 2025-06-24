<?php


//CRIAR UMA FUNCAO PARA VERIFICAR SE A VARIAVEL DE MENSAGEM È TRUE OU FALSE

function exibirErro($erro){
    if(!empty($erro) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        return true;
    }else {
        return false;
    }
}