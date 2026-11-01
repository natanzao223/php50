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
Descritivo: Array Associativo: notas de um aluno em 4 disciplinas e cálculo da média.
*******************************************************************************/

/*
Explicação: o array associativo relaciona cada disciplina à sua nota. O
foreach soma as notas e a média é a soma dividida pela quantidade de
disciplinas (count).
*/

$notas = [
    "Matemática"     => 8.0,
    "Programação"    => 9.5,
    "Banco de Dados" => 7.0,
    "Redes"          => 6.5
];

$soma = 0;

foreach ($notas as $disciplina => $nota) {
    echo "$disciplina: $nota" . PHP_EOL;
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média: " . number_format($media, 2) . PHP_EOL;

?>