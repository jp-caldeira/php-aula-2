<?php

class Pessoa
{
  public string $nome;

  public string $sobrenome;

  public int $id;

  public function setNome($string)
  {
    $this->nome = $string;
  }
}


$valor = "Fulano";
var_dump( (array) $valor);

$valor = 1;
var_dump( (array) $valor );

$valor = TRUE;
var_dump( (array) $valor );

$valor = NULL;
var_dump( (array) $valor ); // Array vazio

$pessoa = new Pessoa;
$pessoa->setNome("Fulano");
$pessoa->sobrenome = "Borges";
$pessoa->id = 1;

var_dump( (array) $pessoa);//Array com as propriedades e os valores (mas sem os métodos)
