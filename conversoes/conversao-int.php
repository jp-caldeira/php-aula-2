<?php

//Conversão para integer
//(int), (integer) ou funções settype() e intval()
$valor = TRUE;
settype($valor, "integer");
var_dump($valor);//1

$valor2 = FALSE;
var_dump(intval($valor2));//0

$valor3 = TRUE;
var_dump( (int)$valor3 );//1

//String para int

$string = "Minha string";
var_dump( intval($string) );//sem valor numérico no início - retorna 0

$string2 = "121Minha String";
var_dump( intval($string2) );//parte numérica é mantida e o resto é ignorado

$string3 = "Minha 212 string";
var_dump( intval($string3) );//0

///Float para int

$float = 25.7;
var_dump( intval($float) );//casas decimais são ignoradas/cortadas - 25

//array para int

//retorna 1 se tiver elementos (mesmo null), 0 se estiver vazio

$cursos = [''];
var_dump( intval($cursos) );//1

$cursos = [null];
var_dump( intval($cursos) );//1

$cursos = [];
var_dump( intval($cursos) );//0

$cursos = [1, 2, 3];
var_dump( intval($cursos) );//1
