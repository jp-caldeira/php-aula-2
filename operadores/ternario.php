<?php

$nota = 9;

// if ($nota > 5){
//     $resultado = "Aprovado";
// } else {
//     $resultado = "Reprovado";
// }

//condicao  ? verdadeiro : falso;

$resultado = $nota > 5 ? "Aprovado" : "Reprovado";

$resultado2 = $nota > 5 ? ($nota > 8 ? "Muito Bem" : "Aprovado") : "Reprovado";

echo $resultado2;
