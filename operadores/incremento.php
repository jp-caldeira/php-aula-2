<?php

$inteiro = 10;
$inteiro = $inteiro + 1;
$inteiro++;


$inteiro = $inteiro - 1;
$inteiro--;

$a = 0;

while ($a <= 10) {
  echo "$a <br>";
  $a++;
}

$numero = 100;


var_dump($numero++);//pós-incrimento - exibe 100

var_dump($numero);//agora exibe 101

var_dump(++$numero);//agora já vai exibir $numero + 1
