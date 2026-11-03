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
Descritivo: Procedimento com Parâmetro: saudacaoUsuario que imprime "Olá, [nome]!".
*******************************************************************************/

/*
Explicação: o procedimento recebe $nome como parâmetro e o insere na
mensagem de saudação.
*/

function saudacaoUsuario($nome)
{
    echo "Olá, $nome!" . PHP_EOL;
}

saudacaoUsuario("Natan");

?>
