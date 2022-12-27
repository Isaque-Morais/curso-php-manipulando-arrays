<?php

$alunos2021 = [
    'Isaque',     
    'Lucas',    
    'Ricardo',   
    'Maria',     
    'Nicole',    
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

// Adicionando itens entre dois arrays, ou seja entre dois arrays
$alunos2022 = [...$alunos2021, 'Isaque Morais', ...$novosAlunos];

// Adiciona itens no final de um array
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiza';

array_unshift($alunos2022, 'Rafaela', 'Bruna');

echo array_shift($alunos2022) . PHP_EOL;

array_pop($alunos2022);

var_dump($alunos2022);