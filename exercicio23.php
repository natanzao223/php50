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
Descritivo: Array Associativo: criar um array de produtos com "nome" e "preço".
*******************************************************************************/

/*
Explicação: o array principal guarda vários produtos, e cada produto é
um array associativo com as chaves "nome" e "preco".
*/

$produtos = [
    ["nome" => "Teclado", "preco" => 120.50],
    ["nome" => "Mouse",   "preco" => 59.90],
    ["nome" => "Monitor", "preco" => 899.00]
];

print_r($produtos);

?>
