<?php

$decimal = 980;

$bin = 0b1111010100;//binario 0b

$octal = 01724;//octal começa com zero

$hexadecimal = 0x3d4;//começa com 0x

var_dump($decimal, $bin, $octal, $hexadecimal);//vai converter automaticamente e exibirá vários 980

//funções conversão

decbin($decimal) <> bindec($bin);
decoct($decimal) <> octdec($octal);
dechex($decimal) <> hexdec($hexadecimal);

////TAMANHO MÁXIMO DO INTEIRO

$int = PHP_INT_MAX;

var_dump($int);

var_dump($int + 1);//quando ultrapassa o tamanho máximo, o inteiro é convertido para float
