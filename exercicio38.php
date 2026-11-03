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
Descritivo: Procedimento: calcularMediaAluno que imprime a média e "Aprovado" ou "Reprovado".
*******************************************************************************/

/*
Explicação: o procedimento recebe duas notas, calcula a média e imprime
o valor. Se a média for maior ou igual a 7, imprime "Aprovado"; caso
contrário, "Reprovado".
*/

function calcularMediaAluno($nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    echo "Média: " . number_format($media, 2) . PHP_EOL;

    if ($media >= 7) {
        echo "Aprovado" . PHP_EOL;
    } else {
        echo "Reprovado" . PHP_EOL;
    }
}

calcularMediaAluno(8, 7);
calcularMediaAluno(5, 6);

?>
