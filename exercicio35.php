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
Descritivo: Procedimento com Array: imprimirArray que imprime todos os elementos.
*******************************************************************************/

/*
Explicação: o procedimento recebe um array e usa foreach para imprimir
cada elemento em uma linha.
*/

function imprimirArray($array)
{
    foreach ($array as $elemento) {
        echo $elemento . PHP_EOL;
    }
}

imprimirArray(["Maçã", "Banana", "Uva"]);

?>
