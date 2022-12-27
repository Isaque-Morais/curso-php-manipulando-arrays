<?php

$dados = [ 
    'nome'  => 'Isaque',
    'nota'  => 6,
    'idade' => 20,
];

// Usando a função list por de baixo dos panos aqui =D
['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

var_dump($nome, $nota, $idade);