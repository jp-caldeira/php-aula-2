<?php

var_dump(isset($valor));//variável não existe - retorna false

$valor1 = 10;

var_dump(isset($valor1));//variável existe e tem valor - retorna true

$valor2;

var_dump(isset($valor2));//variável foi inicializada, mas não tem valor definido - retorna false

$array = [
        "php" => 7.2,
        "Dart" => 2,
        "C#" => 9
];

if (isset($array['C#'])){
    echo $array['C#'];
} else {
  echo "Curso de C# não encontrado";
}
