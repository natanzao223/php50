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
Descritivo: Procedimento: receber um array associativo de um carro e imprimir seus dados.
*******************************************************************************/

/*
Explicação: o procedimento recebe o array associativo do carro (marca,
modelo, ano) e usa foreach para imprimir cada par "chave: valor".
*/

function imprimirCarro($carro)
{
    foreach ($carro as $chave => $valor) {
        echo "$chave: $valor" . PHP_EOL;
    }
}

$carro = [
    "marca"  => "Volkswagen",
    "modelo" => "Gol",
    "ano"    => 2020
];

imprimirCarro($carro);

?>