<?php

$array = [
        "php" => 7.2,
        "Dart" => 2,
        "C#" => "Ré Bemol"
];

// if (isset($array['C#'])){
//     echo $array['C#'];
// } else {
//   echo "Curso de C# não encontrado";
// }

//$cSharp = isset($array['C#']) ? $array['C#'] : 'Curso de C# não encontrado';

$cSharp = $array['C#'] ?? "Curso de C# não encontrado";

echo $cSharp;
