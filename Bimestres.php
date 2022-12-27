<?php

$notasBrimestre1 = [
    'Isaque'    => 10, 
    'Lucas'     => 9,
    'Ricardo'   => 8,
    'Maria'     => 7,
    'Nicole'    => 6,
];

$notasBrimestre2 = [
    'Lucas'     => 9,
    'Ricardo'   => 8,
    'Maria'     => 7,
    'Nicole'    => 6,
];

$alunosFaltantes = array_diff_key($notasBrimestre1, $notasBrimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));
var_dump(array_flip($alunosFaltantes));
