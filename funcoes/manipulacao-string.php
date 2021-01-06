<?php

$string = "String a ser pesquisada";

$posicaoR = strpos($string, "r");

var_dump($posicaoR);//só encontra a primeira ocorrência da letra

$posicaoS = strpos($string, "s", 13);
//3 parametro - offset - por padrao é 0, indica a partir de onde será pesquisado

var_dump($posicaoS);

$posicao3 = strpos($string, "ser");
//dá para pesquisar por strings maiores. retorna a posição da primeira letra

var_dump($posicao3);

//STR REPLACE

$replace = str_replace("r", "l", $string);//troca todas as ocorrências de r por l na string original
var_dump($replace);

$replace2 = str_replace(["r", "a"], "x", $string); //aceita como array como arg
var_dump($replace2);

$replace3 = str_replace(["r", "a"], ["*", "x"], $string);
var_dump($replace3);

//SUB STR

$sub = substr($string, 13, 8);//ultimo paramento é opcional
var_dump($sub);//"pesquisa"

$sub2 = substr($string, -4); //de trás para frente - retorna "sada"
var_dump($sub2);

$n = "123";
$resultado = mb_strlen($n);
var_dump($resultado);
