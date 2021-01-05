<?php

$nome = "Curso PHP";

var_dump($nome[8]);

$nome[8] = "p";

var_dump($nome);

//echo "<h1 style="color: red;">Curso PHP</h1>";//dá erro
//echo "<h1 style='color: red;'>Curso PHP</h1>";
//\\ESCAPANDO\\

echo "<h1 style=\"color: red;\">Curso PHP</h1>";//aspas duplas dentro de aspas duplas

echo "Eu tenho R\$mil na conta<br>";

echo "\\192.168.10.10\minha-pasta\\";

//HEREDOC E NOWDOC

$escola = "escola";
$curso = "PHP";

$conteudo = <<<HTML
    <h1 style="color: red;">Olá $escola</h1>
    <p style="color: blue;">Bem-vindo ao curso de $curso</p>

HTML;

$conteudo2 = <<<'HTML'
    <h1 style="color: red;">Olá $escola</h1>
    <p style="color: blue;">Bem-vindo ao curso de $curso</p>

HTML;
//nowdoc - não interpreta variáveis

echo $conteudo;
