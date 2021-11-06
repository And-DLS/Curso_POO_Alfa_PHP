<?php

class Animal
{
    public $especie;
    public $genero;

    public function cacar()
    {
        return "Estou caçando";
    }

    public function obterEspecie()
    {
        return 'Minha especie é '.$this->especie;
    }
}