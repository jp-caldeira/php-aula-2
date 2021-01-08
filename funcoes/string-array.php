<?php

//de string para array
$cursos = explode(", ", "PHP, C#, Javascript");
//explode(delimitador, string a ser "explodida");

var_dump($cursos);

//3 parametro opcional -> limita o tamanho de itens no array
$cursos2 = explode(", ", "Javascript, PHP, SQL, C#", 3);
//$cursos2[0] = "Javascript"
//$cursos2[1] = "PHP"
//$cursos2[2] = "SQL, C#"
var_dump($cursos2);

//3 parametro valor negativo - elimina itens de trás para frente
$cursos3 = explode(", ", "Javascript, PHP, SQL, C#", -2);
var_dump($cursos3);
//   0 => string 'Javascript'
//   1 => string 'PHP'

//de array para string - implode

$cursosString = implode(" - ", $cursos);
var_dump($cursosString);
