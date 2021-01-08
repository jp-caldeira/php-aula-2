<?php

$valor = 1879.75;

var_dump ($valor);//float



//number_format(valor a ser formatado, numero de casas decimais, separador decimal, separador de milhar)
$valorFormat = number_format($valor, 2, ",", ".");

var_dump($valorFormat);//virou uma string

$valorFormat += 10;//Notice: A non well formed numeric value encountered

var_dump($valorFormat);//virou um float - 11.879

$valor += 10;

var_dump($valor);// 1889.95

echo "R$ " . $valorFormat;
