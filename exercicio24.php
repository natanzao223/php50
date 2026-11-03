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
Descritivo: FOREACH Aninhado: imprimir nome e preço de cada produto do exercício 23.
*******************************************************************************/

/*
Explicação: o foreach externo percorre cada produto. O foreach interno
percorre os campos (chave => valor) daquele produto e imprime cada um.
*/

$produtos = [
    ["nome" => "Teclado", "preco" => 120.50],
    ["nome" => "Mouse",   "preco" => 59.90],
    ["nome" => "Monitor", "preco" => 899.00]
];

foreach ($produtos as $produto) {
    foreach ($produto as $campo => $valor) {
        echo "$campo: $valor" . PHP_EOL;
    }
    echo "-----" . PHP_EOL;
}

?>
