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
Descritivo: WHILE: ler números até digitar 0 e mostrar a soma.
*******************************************************************************/

/*
Explicação: lê o primeiro número antes do laço. Enquanto o número for
diferente de 0, ele é somado e um novo número é lido. Ao digitar 0, o
laço termina e a soma é exibida.
*/

$soma = 0;

echo "Digite um número (0 para sair): ";
$numero = (float) trim(fgets(STDIN));

while ($numero != 0) {
    $soma += $numero;
    echo "Digite um número (0 para sair): ";
    $numero = (float) trim(fgets(STDIN));
}

echo "Soma total: $soma" . PHP_EOL;
?>
