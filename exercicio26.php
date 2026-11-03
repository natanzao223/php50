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
26014469-2 - rafael baliski
Data: 01 de Novembro de 2026
Descritivo: Array/Funções Nativas: ordenar [10, 2, 5, 8, 1] em ordem crescente com sort().
*******************************************************************************/

/*
Explicação: sort() reordena o próprio array em ordem crescente (passagem
por referência). Depois, o foreach imprime os valores já ordenados.
*/

$numeros = [10, 2, 5, 8, 1];

sort($numeros);

foreach ($numeros as $numero) {
    echo $numero . PHP_EOL;
}

?>
