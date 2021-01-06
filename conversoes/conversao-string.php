<?php

$valor = TRUE;
var_dump ( (string) $valor);//1

$valor = FALSE;
var_dump ( (string) $valor);// string vazia

$valor = NULL;
var_dump ( (string) $valor);//vazia ""

$valor = 1;
var_dump ( (string) $valor);// string "1"

$valor = 1.5;
var_dump( (string) $valor ); // String '1.5'

$valor = 2e2;
var_dump( (string) $valor ); // String '200'

$valor = 0xffffffffff;
var_dump( (string) $valor ); // String '1099511627775'

$valor = [];
var_dump( (string) $valor ); // String 'Array' - com erro

$valor = [1,5,8];
var_dump( (string) $valor ); // String 'Array' - com erro
