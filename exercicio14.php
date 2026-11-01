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
Descritivo: DO-WHILE: ler e imprimir números até que o número lido seja negativo.
*******************************************************************************/

/*
Explicação: o do-while lê um número e o imprime. A condição repete o
laço enquanto o número for maior ou igual a 0; ao digitar um negativo
(que também é impresso), o laço termina.
*/

do {
    echo "Digite um número: ";
    $numero = (float) trim(fgets(STDIN));
    echo "Número lido: $numero" . PHP_EOL;
} while ($numero >= 0);

?>