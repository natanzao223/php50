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
Descritivo: Função: somar, que recebe dois números e retorna a soma.
*******************************************************************************/

/*
Explicação: a função recebe $a e $b e devolve a soma com return. O
resultado é guardado em uma variável e impresso fora da função.
*/

function somar($a, $b)
{
    return $a + $b;
}

$resultado = somar(15, 27);

echo "Soma: $resultado" . PHP_EOL;

?>