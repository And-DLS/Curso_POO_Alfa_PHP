<?php

require_once("IMC.php");

$imcUsuario = new Imc(65, 1.73);

echo $imcUsuario->calcularIMC();

echo "<br>";

echo $imcUsuario->retornarTaxaBasal();