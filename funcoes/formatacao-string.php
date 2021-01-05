<?php

echo "fulanho", "siclano";
echo "<br>";
print("print com parentêses");
print "<br>print sem parentêses<br>";

$curso = "PHP";
$versao = 7.4;

echo "Curso de ", $curso, " versão: ", $versao;
echo "<br>";
echo "Curso de ". $curso . " versão: " . $versao;
echo "<br>";
echo "Curso de $curso versão: $versao";

$resultado = "Curso de ". $curso . " versão: " . $versao;

echo "<br>";
echo $resultado;

///sprintf
$resultado = sprintf("Curso de %s versão: %0.1f", $curso, $versao);
echo "<br>";
$resultado;

printf("Curso de %s versão: %0.1f", $curso, $versao);

$entrada = ['PHP', 7.4];

$resultado = vsprintf("Curso de %s versão %0.1f", $entrada);
echo "<br>";
echo $resultado;
echo "<br>";
vprintf("Curso de %s versão %0.1f", $entrada);
