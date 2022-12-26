<?php

$array = [
    'um',
    'dois',
    'tres'
];

$contador = 0;

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" .PHP_EOL;
    $contador++;
}

echo "Total: $contador" .PHP_EOL;

var_dump(array_is_list($array));