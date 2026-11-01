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
Descritivo: WHILE: contar quantos dígitos tem um número inteiro.
*******************************************************************************/

/*
Explicação: usa o valor absoluto do número. Se for 0, tem 1 dígito. Nos
outros casos, o while divide o número por 10 (divisão inteira) e conta
uma volta a cada divisão, até o número chegar em 0.
*/

echo "Digite um número inteiro: ";
$numero = abs((int) trim(fgets(STDIN)));

$digitos = 0;

if ($numero == 0) {
    $digitos = 1;
}

while ($numero > 0) {
    $numero = intdiv($numero, 10);
    $digitos++;
}

echo "Quantidade de dígitos: $digitos" . PHP_EOL;
?>