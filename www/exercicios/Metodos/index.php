<?php

require_once("Animal.php");

$animal = new Animal();

$animal->especie = "Mamifero/Carnivoro";
$animal->genero = "Feminino";

echo '<pre>';
print_r($animal);
echo $animal->cacar();

echo '<br>';

echo $animal->obterEspecie();