<?php

$data1 = new DateTime("2020-05-23");

$data2 = new DateTime("2020-11-15");

$intervalo = $data1->diff($data2);//retorna um objeto do tipo DateInterval
var_dump($intervalo);

$interval2 = $data2->diff($data1);
//var_dump($interval2);//os mesmo dados, só muda o valor do atributo "invert"

var_dump($intervalo->format("%m meses, %d dias"));

$data1->add(new DateInterval('P3M27D'));

var_dump($data1);

$data1->sub(new DateInterval('P22D'));

var_dump($data1);
