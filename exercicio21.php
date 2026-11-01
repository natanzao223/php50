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
Descritivo: Array Heterogêneo (Associativo): armazenar dados de um aluno.
*******************************************************************************/

/*
Explicação: o array associativo usa chaves de texto (nome, idade, curso)
e guarda tipos diferentes (string e inteiro), por isso é heterogêneo.
*/

$aluno = [
    "nome"  => "Gustavo Tristão",
    "idade" => 20,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

print_r($aluno);

?>