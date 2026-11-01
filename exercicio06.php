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
Descritivo: WHILE: imprimir os números de 1 a 10.
*******************************************************************************/

/*
Explicação: $i começa em 1. Enquanto $i for menor ou igual a 10, o while
imprime o valor e incrementa $i dentro do bloco.
*/

$i = 1;

while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}

?>