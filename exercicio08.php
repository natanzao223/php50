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
Descritivo: WHILE: imprimir os múltiplos de 3, de 3 a 30.
*******************************************************************************/

/*
Explicação: $i começa em 3 e o while soma 3 a cada volta, imprimindo
somente os múltiplos de 3 até 30.
*/

$i = 3;

while ($i <= 30) {
    echo $i . PHP_EOL;
    $i += 3;
}
?>
