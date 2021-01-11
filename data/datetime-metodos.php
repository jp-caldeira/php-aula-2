<?php

$aniversario = new DateTime("2020-05-12");

$aniversario->setTime(15, 30, 02);
//$aniversario->setDate(2020, 8, 24);
//$aniversario->setTimeStamp(2_000_000_000);

var_dump($aniversario->getOffset());//diferença do fuso horário, em segundos
var_dump($aniversario->getTimezone());//retorna objeto datetimezone com as infos do fuso horário
var_dump($aniversario->getTimestamp());

$aniversario->modify("next Saturday");//altera a data com os formatos aceitos pela strtotime
$aniversario->setTime(15, 30, 02);

var_dump($aniversario);
