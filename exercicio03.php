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
Descritivo: FOR: exibir a tabuada do 5, de 1 a 10.
*******************************************************************************/

/*
Explicação: o for varia o multiplicador de 1 a 10 e, a cada volta, imprime
5 x multiplicador = resultado.
*/

for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . PHP_EOL;
}
?>
