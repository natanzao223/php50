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
Descritivo: Array Associativo/FOREACH: imprimir cada dado no formato "chave: valor".
*******************************************************************************/

/*
Explicação: o foreach com "$chave => $valor" percorre o array associativo
e imprime cada par no formato pedido.
*/

$aluno = [
    "nome"  => "Gustavo Tristão",
    "idade" => 20,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}

?>
