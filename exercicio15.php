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
Descritivo: FOR/IF: encontrar e imprimir os números primos entre 1 e 50.
*******************************************************************************/

/*
Explicação: o for externo percorre de 2 a 50. Para cada número, o for
interno testa divisores de 2 até a raiz do número. Se algum divide
exatamente, o número não é primo. Os que sobrevivem são impressos.
*/

for ($n = 2; $n <= 50; $n++) {
    $primo = true;

    for ($d = 2; $d * $d <= $n; $d++) {
        if ($n % $d == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo $n . PHP_EOL;
    }
}

?>
