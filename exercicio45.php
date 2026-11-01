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
Descritivo: Função com Array: obterPrimeiroElemento, que retorna o primeiro elemento.
*******************************************************************************/

/*
Explicação: a função recebe um array. Se estiver vazio, retorna null;
caso contrário, retorna o elemento do índice 0.
*/

function obterPrimeiroElemento($array)
{
    if (count($array) == 0) {
        return null;
    }

    return $array[0];
}

echo "Primeiro elemento: " . obterPrimeiroElemento(["Curitiba", "Londrina", "Maringá"]) . PHP_EOL;

?>