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

if (is_array($notas)) {
    echo 'Sim, é um array'. PHP_EOL;
}

// Verifica se chave existe
var_dump(array_is_list($notas));

// Verifica se chave existe e não é null
echo 'Isaque fez a prova:' .PHP_EOL;
var_dump(isset($notas['Isaque']));

// Verifica se o valor existe
 echo 'Alguém tirou 10?' . PHP_EOL;
 var_dump(in_array(10, $notas));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));
