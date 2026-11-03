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
Descritivo: Procedimento: contagemRegressiva a partir de um número até 0.
*******************************************************************************/

/*
Explicação: o procedimento recebe um número e usa um for decrescente,
imprimindo de $numero até 0.
*/

function contagemRegressiva($numero)
{
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . PHP_EOL;
    }
}

contagemRegressiva(5);

?>
