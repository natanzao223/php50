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
Descritivo: FOR: imprimir os números pares de 2 a 20.
*******************************************************************************/

/*
Explicação: o for começa em 2 e soma 2 a cada volta ($i += 2), então só
passa pelos números pares até chegar em 20.
*/

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . PHP_EOL;
}

?>