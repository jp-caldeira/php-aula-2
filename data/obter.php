<?php

//date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");

var_dump($data);

$data2 = date("d-m-Y H:i");

var_dump($data2);

var_dump(date("e"), date("P"));

//função time()

var_dump(time());

$amanha = time() + (60*60*24);

$dataAmanha = date("d/m/Y", $amanha);

var_dump($dataAmanha);

$amanha2 = strtotime("+1 day");

$dataAmanha2 = date("d/m/Y", $amanha);
var_dump($dataAmanha2);

$dataBanco = strtotime("2020-05-06 15:59");

$data4 = date("d/m/Y", $dataBanco);
var_dump($data4);

function formata_data_br($data){
    $timestamp = strtotime($data);

    return date("d/m/Y", $timestamp);
}

echo formata_data_br("2021-01-11");
