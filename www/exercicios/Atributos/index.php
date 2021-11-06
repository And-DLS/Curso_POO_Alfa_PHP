<?php

require_once("Livro.php");

$livro = new Livro();
$livro->autor = "Maria";
$livro->editora = "VEJA";
$livro->genero = "Ação";
$livro->titulo = "Feijão e o pé de João";
$livro->paginas = "200";

echo '<pre>';
print_r($livro);