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
Descritivo: Função: inverterString, que retorna a string invertida sem usar strrev().
*******************************************************************************/

/*
Explicação: o for percorre a string do último ao primeiro caractere e
concatena cada um em $invertida, que é retornada no final.
*/

function inverterString($texto)
{
    $invertida = "";

    for ($i = mb_strlen($texto, "UTF-8") - 1; $i >= 0; $i--) {
        $invertida .= mb_substr($texto, $i, 1, "UTF-8");
    }

    return $invertida;
}

echo inverterString("tomate") . PHP_EOL;

?>
