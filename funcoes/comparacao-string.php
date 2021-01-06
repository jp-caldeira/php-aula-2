<?php

var_dump("Fulano" == 0);//na conversão, o php considera que a uma string tem um 0 no começo

var_dump("11t" == 11);//quando ele converte a string para inteiro, o php ignora o "t" e faz a comparação 11 == 11

var_dump("Fulano" === 0); //false - comparação estrita, de tipo e valor

var_dump("11t" === 11);

//funcoes
var_dump(strcmp("aa", "aa"), "aa" <=> "aa");//ambas retornam 0
var_dump(strcmp("Aa", "aa"));//diferencia maiúsculas de minúsculas - retorna -1


var_dump(strcmp("aaa", "aa"));//1
var_dump(strcmp("aa", "aaa"));//-1


if(strcmp("aa", "aa") === 0){
    echo "as strings são iguais";
} else {
    echo "as strings não são iguais";
}

var_dump(strcasecmp("Aa", "aa"));//não diferencia maiscula e minusculas
