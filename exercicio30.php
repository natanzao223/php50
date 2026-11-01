<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
26014123-2 - gustavo tristao
26013927-2 - natan da silva
26013158-2 - jackson rodrigues
26014469-2-2 - rafael baliski
Data: 01 de Novembro de 2026
Descritivo: Array Multidimensional: matriz 3x3 e impressão do elemento da 2ª linha, 3ª coluna.
*******************************************************************************/

/*
Explicação: a matriz é um array de 3 arrays (linhas). Como os índices
começam em 0, a segunda linha é [1] e a terceira coluna é [2].
*/

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Elemento da 2ª linha, 3ª coluna: " . $matriz[1][2] . PHP_EOL;

?>