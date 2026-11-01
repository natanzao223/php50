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
Descritivo: FOREACH: somar todos os números do array do exercício 17.
*******************************************************************************/

/*
Explicação: $soma começa em 0. O foreach percorre cada número do array e
o acumula em $soma. No final, imprime o total.
*/

$numeros = [4, 8, 15, 16, 23, 42, 7, 19, 31, 50];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "Soma dos números: $soma" . PHP_EOL;

?>