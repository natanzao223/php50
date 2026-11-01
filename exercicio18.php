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
Descritivo: FOREACH: imprimir cada cidade do array do exercício 16 em uma nova linha.
*******************************************************************************/

/*
Explicação: o foreach percorre o array de cidades e, a cada volta,
$cidade recebe um elemento, que é impresso seguido de quebra de linha.
*/

$cidades = ["Curitiba", "São Paulo", "Rio de Janeiro", "Londrina", "Maringá"];

foreach ($cidades as $cidade) {
    echo $cidade . PHP_EOL;
}

?>