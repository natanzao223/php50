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
Descritivo: Procedimento: desenharLinha que imprime uma linha de 20 hifens.
*******************************************************************************/

/*
Explicação: str_repeat() repete o caractere "-" 20 vezes, formando a
linha, que é impressa pelo procedimento.
*/

function desenharLinha()
{
    echo str_repeat("-", 20) . PHP_EOL;
}

desenharLinha();

?>