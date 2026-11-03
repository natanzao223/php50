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
Descritivo: Procedimento: verificarParImpar que imprime se o número é "Par" ou "Ímpar".
*******************************************************************************/

/*
Explicação: usa o operador de resto (%). Se o resto da divisão por 2 for
0, o número é par; caso contrário, é ímpar.
*/

function verificarParImpar($numero)
{
    if ($numero % 2 == 0) {
        echo "Par" . PHP_EOL;
    } else {
        echo "Ímpar" . PHP_EOL;
    }
}

verificarParImpar(8);
verificarParImpar(13);

?>
