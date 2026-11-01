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
Descritivo: Função: gerarArrayPares, que retorna um array com os pares de 0 até n.
*******************************************************************************/

/*
Explicação: o for começa em 0 e avança de 2 em 2 até n, adicionando cada
número par ao array com []. No final, a função retorna o array.
*/

function gerarArrayPares($n)
{
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

print_r(gerarArrayPares(10));

?>