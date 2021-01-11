<?php

var_dump("30/01/2020" > "05/02/2020");

var_dump("2020-01-30" > "2020-02-05");//formato iso 8601 - agora a comparação funciona

var_dump("002" > "000199");

var_dump("000-2" > "000-1999");//compara caracter a caracter

$data1 = strtotime("2020-01-30");//convertendo primeiro e depois comparando
$data2 = strtotime("5-2-2020");

var_dump($data1 > $data2);

//comparação objs datetime
$aniversario = new DateTime('2020-05-27');
$data2 = $aniversario->add(new DateInterval("P3M27D"));

if($aniversario > $data2){
    echo "o aniversário é depois da data 2";
} else {
    echo "a data 2 é depois do aniversario";
}
