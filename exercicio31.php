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
Descritivo: Procedimento: saudacao que imprime "Bem-vindo ao PHP!".
*******************************************************************************/

/*
Explicação: o procedimento saudacao não recebe parâmetros nem retorna
valor; apenas imprime a mensagem. Ele é chamado depois de definido.
*/

function saudacao()
{
    echo "Bem-vindo ao PHP!" . PHP_EOL;
}

saudacao();

?>