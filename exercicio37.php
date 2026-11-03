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
Descritivo: Procedimento com Múltiplos Parâmetros: mostrarDados (nome, idade e cidade).
*******************************************************************************/

/*
Explicação: o procedimento recebe três parâmetros e os imprime
organizados, um por linha, com rótulos.
*/

function mostrarDados($nome, $idade, $cidade)
{
    echo "Nome:   $nome" . PHP_EOL;
    echo "Idade:  $idade anos" . PHP_EOL;
    echo "Cidade: $cidade" . PHP_EOL;
}

mostrarDados("Jackson", 22, "Curitiba");

?>
