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
Descritivo: Array/FOR: criar um array com os 7 dias da semana e imprimir com for.
*******************************************************************************/

/*
Explicação: o array tem 7 posições (índices 0 a 6). O for percorre de 0
até count($dias) - 1, acessando cada dia pelo índice.
*/

$dias = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . PHP_EOL;
}

?>