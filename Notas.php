<?php

$notas = [
    'Isaque'    => 10, 
    'Lucas'     => 9,
    'Ricardo'   => 8,
    'Maria'     => 7,
    'Nicole'    => 6,
];

// ksort($notas); Função que ordena os valores a partir do indices em ordem alfabetica
// rsort($notas); Função que ordena apenas o valor 
// arsort($notas); Função que retorna um array de forma ordenada com as referências dos indices

krsort($notas); //Função que ordena os indice em ordem alfabetica
var_dump($notas);