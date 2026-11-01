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
Descritivo: Função: converterParaMaiusculas, que retorna a string em maiúsculas.
*******************************************************************************/

/*
Explicação: mb_strtoupper() converte o texto para maiúsculas respeitando
acentos (UTF-8), e a função retorna o resultado.
*/

function converterParaMaiusculas($texto)
{
    return mb_strtoupper($texto, "UTF-8");
}

echo converterParaMaiusculas("programação em php") . PHP_EOL;

?>