<?php

require_once("Pessoa.php");

$andrey = new Pessoa();
$andrey->nome = "Andrey Diógenes Lima da Silva";
$andrey->cpf = "000.000.000-00";
$andrey->dataNascimento = "28/09/2000";
$andrey->emprego = "Severino da Tecnologia";
$andrey->sexo = "M";

echo '<br>';
echo $andrey->retornarEmailDaPessoa();
echo '<br>';
echo $andrey->retornaOCargo("Maestro");
echo "<pre>";
print_r($andrey);
print_r($andrey->nome);
echo '<br>';
print_r($andrey->sexo);
echo '<br>';
print_r($andrey->retornarDadosPessoa());
echo '<br>';
print_r($andrey->pular());
echo '<br>';
print_r($andrey->comer(true));
echo '<br>';
print_r($andrey->comer(false));
echo '<br>';
echo $andrey->mudaOCargoDaPessoa("Maestro");


$dennys = new Pessoa();
$dennys->nome = "Dennys";
$dennys->cpf = "000.000.000-00";
$dennys->dataNascimento= "Ontem";
echo '<br>';
print_r($dennys->retornarDadosPessoa());


// bad example
echo "Meu nome é DENNYS
 Minha data de nascimento é ONTEM
 E meu cpf é NULO";
