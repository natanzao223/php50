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
Descritivo: FOR: calcular e imprimir a soma dos números de 1 a 100.
*******************************************************************************/

/*
Explicação: a variável $soma começa em 0. O for passa de 1 a 100 e acumula
cada valor em $soma. No final, imprime o total (5050).
*/

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

echo "Soma de 1 a 100: $soma" . PHP_EOL;
?>