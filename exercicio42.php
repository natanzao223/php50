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
Descritivo: Função: maiorNumero, que retorna o maior entre dois números.
*******************************************************************************/

/*
Explicação: a função compara os dois valores com if. Se $a for maior,
retorna $a; caso contrário, retorna $b (inclui o caso de empate).
*/

function maiorNumero($a, $b)
{
    if ($a > $b) {
        return $a;
    }

    return $b;
}

echo "Maior número: " . maiorNumero(12, 30) . PHP_EOL;

?>