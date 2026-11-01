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
Descritivo: FOREACH/IF: imprimir apenas os números maiores que 20 do array.
*******************************************************************************/

/*
Explicação: o foreach percorre o array e o if só deixa imprimir os
valores maiores que 20.
*/

$numeros = [12, 5, 23, 18, 9, 45];

foreach ($numeros as $numero) {
    if ($numero > 20) {
        echo $numero . PHP_EOL;
    }
}

?>