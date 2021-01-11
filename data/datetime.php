<?php

$agora = new DateTime();

$data2 = new DateTime("2020-11-17");

$ontem = new DateTime("yesterday");

$losAngeles = new DateTime("now", new DateTimeZone('America/Los_Angeles'));

$outraData = DateTime::createFromFormat("d/m/Y H:i:s", "17/11/2020 00:00:00");

var_dump($data2->format('d/m/Y'), $outraData);

function iso_para_br($data){
    $dateTime = new DateTime($data);

    return $dateTime->format("d/m/Y");
}

function br_para_iso($data){
    $dateTime = DateTime::createFromFormat("d/m/Y", $data);

    return $dateTime->format("Y-m-d");
}

var_dump(iso_para_br("2019-02-13"), br_para_iso("17/11/2020"));
