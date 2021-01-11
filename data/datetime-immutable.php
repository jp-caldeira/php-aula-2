<?php

$aniversario = new DateTime('2020-05-27');

var_dump($aniversario);

$aniversario->add(new DateInterval("P3M27D"));//alterou a data original

var_dump($aniversario);

$aniversario2 = new DateTimeImmutable('2020-05-27');

var_dump($aniversario2);

$data2 = $aniversario2->add(new DateInterval("P3M27D"));//agora a primeira data não foi alterada

var_dump($aniversario2, $data2);
