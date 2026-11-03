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
Descritivo: Array/Busca: verificar se a fruta "Maçã" existe no array.
*******************************************************************************/

/*
Explicação: in_array() procura o valor dentro do array e retorna true ou
false. O if exibe a mensagem correspondente.
*/

$frutas = ["Banana", "Maçã", "Uva", "Laranja", "Morango"];

if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã existe no array." . PHP_EOL;
} else {
    echo "A fruta Maçã não existe no array." . PHP_EOL;
}

?>
