<?php

//com exceção da conversão de string para float, em todos os outros casos o valor primeiro
//é convertido para int e depois para float

$valor = TRUE;
var_dump( (float) $valor);

$valor = [1,2];
var_dump( (float) $valor);

$valor = [];
var_dump( (float) $valor);

$valor = "1string";
var_dump( (float) $valor);

$valor = "string";
var_dump( (float) $valor);
