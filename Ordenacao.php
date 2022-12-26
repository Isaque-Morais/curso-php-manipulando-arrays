<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota'  => 10,
    ],

    [
        'aluno' => 'Vinicius',
        'nota'  => 6,
    ],

    [
        'aluno' => 'Maria',
        'nota'  => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota2['nota'] <=> $nota1['nota'];
} 

usort($notas, 'ordenaNotas'); // Chama a função com a logica de ordenar os indices do array
var_dump($notas);