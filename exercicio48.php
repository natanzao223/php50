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
Descritivo: Função: fatorial, que retorna o fatorial de um número.
*******************************************************************************/

/*
Explicação: o fatorial de n é 1 x 2 x ... x n. A variável $resultado
começa em 1 e o for multiplica cada valor de 2 até n. Para 0 e 1, o
resultado é 1.
*/

function fatorial($n)
{
    $resultado = 1;

    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo "5! = " . fatorial(5) . PHP_EOL;
echo "0! = " . fatorial(0) . PHP_EOL;

?>