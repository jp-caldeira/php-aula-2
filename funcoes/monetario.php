<?php

$valor = 1879.75;

var_dump ($valor);

//number_format(valor a ser formatado, numero de casas decimais, separador decimal, separador de milhar)
$valorFormat = number_format($valor, 2, ",", ".");

var_dump($valorFormat);

echo "R$ " . $valorFormat;
