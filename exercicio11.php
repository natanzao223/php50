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
Descritivo: DO-WHILE: imprimir os números de 1 a 10.
*******************************************************************************/

/*
Explicação: o do-while executa o bloco primeiro e só depois testa a
condição. Imprime $i, incrementa e repete enquanto $i for menor ou
igual a 10.
*/

$i = 1;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 10);
?>
