<?php

is_int(123);

var_dump(is_int(123)); //true
var_dump(is_int("123")); //false

is_float(1.5);

var_dump(is_float(1.23));//true
var_dump(is_int("1.23")); //false

is_numeric(1213123);

var_dump(is_numeric(123));//true
var_dump(is_numeric(12.3));//true
var_dump(is_numeric("123"));//true - verifica se tem uma representação numérica
var_dump(is_numeric("1asdasdsad"));//false

is_string("");

var_dump(is_string(""));//true

is_bool(true);

var_dump(is_bool(true));

is_scalar("");

var_dump(is_scalar(true));
var_dump(is_scalar(1.5));
var_dump(is_scalar("oi"));
var_dump(is_scalar(123));
var_dump(is_scalar([1, 2, 3]));//false

gettype("d");

var_dump(gettype("sddadsas"));
