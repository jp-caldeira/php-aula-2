<?php

//1 solução

function substrings($n): int {

    $tamanho = mb_strlen($n);

    $resultado = $n;

    for($i = 0; $i < $tamanho; $i++){
        $resultado = $resultado + $n[$i];
    }

    for($i = 0; $i < $tamanho - 1; $i++){
        $sub = substr($n, $i, $i + 2);
        $resultado = $resultado + $sub;
    }

    return $resultado;


}

//resolução oficial

function substrings2($n) {
    return substring($n, 1);
}

function substring($n, $step) {
    if(strlen($n) == $step)
        return $n;
    else {
        $soma = 0;
        for($i = 0; $i<= strlen($n)-$step; $i++)
        {
            $soma += intval(substr($n, $i, $step));
        }
        $soma += substring($n, $step + 1);
        return $soma;
    }
}

$n = "221";

$resultado = substrings($n);

print($resultado);
