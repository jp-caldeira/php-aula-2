<?php

function diaSemana($strData)
{
      $arrayDias = [1 => "Segunda-feira", 2 => "Terça-feira", 3 => "Quarta-feira", 4 => "Quinta-feira", 5 => "Sexta-feira",
      6 => "Sábado", 7 => "Domingo"];

      $data = DateTime::createFromFormat("d/m/Y", $strData);

      $dia = $data->format("N");

      return $arrayDias[$dia];
}

echo diaSemana("18/11/2009");
