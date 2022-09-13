<?php

session_start();

function setarMensagemErro(string $mensagem) : void {
    $_SESSION['mensagemErro'] = $mensagem;
}

function obterMensagemErro() : ?string{
    if(isset($_SESSION['mensagemErro'])) //pesquisar
        return $_SESSION['mensagemErro'];
    return null;
}

function setarMensagemSucesso(string $mensagem) : void {
    $_SESSION['mensagemSucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string{
    if(isset($_SESSION['mensagemSucesso']))
        return $_SESSION['mensagemSucesso'];
    return null;
}

function removerMensagemSucesso() : void{
    if(isset($_SESSION['mensagemSucesso']))
        unset ($_SESSION['mensagemSucesso']);
}

function removerMensagemErro() : void{
    if(isset($_SESSION['mensagemErro']))
        unset($_SESSION['mensagemErro']);
}