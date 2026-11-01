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
Descritivo: Procedimento: mostrarTabuada que imprime a tabuada de 1 a 10 de um número.
*******************************************************************************/

/*
Explicação: o procedimento recebe um número e usa um for de 1 a 10 para
imprimir número x multiplicador = resultado.
*/

function mostrarTabuada($numero)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . PHP_EOL;
    }
}

mostrarTabuada(7);

?>