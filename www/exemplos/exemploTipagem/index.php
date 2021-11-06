<?php

require_once('Usuario.php');
require_once('Endereco.php');

$nome = "Andrey";
$idade = "21";
$usuario = new Usuario($nome, $idade, new Endereco());
$usuario->saldoAtual = 9.9;
print_r($usuario->retornaSaldoAtualDoUsuario());

print_r($usuario->retornaOEnderecoDoCliente());