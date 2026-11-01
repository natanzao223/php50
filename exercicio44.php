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
Descritivo: Função: calcularAreaRetangulo, que retorna a área a partir de largura e altura.
*******************************************************************************/

/*
Explicação: a área de um retângulo é largura x altura. A função
multiplica os dois parâmetros e retorna o resultado.
*/

function calcularAreaRetangulo($largura, $altura)
{
    return $largura * $altura;
}

echo "Área: " . calcularAreaRetangulo(5, 3) . PHP_EOL;

?>