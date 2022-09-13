<?php

function validaNome(string $nome) : bool{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro('O nome não pode conter menos que 3 caracteres');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro('O nome não pode conter mais que 40 caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
    if (!is_numeric($idade)) {
        setarMensagemErro('Digite um número válido para a idade');
        return false;
    }
    return true;
}
