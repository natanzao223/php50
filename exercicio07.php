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
Descritivo: WHILE: pedir para adivinhar um número até o usuário acertar.
*******************************************************************************/

/*
Explicação: o número secreto é 7. O palpite começa com um valor impossível
(0) para entrar no while. Enquanto o palpite for diferente do secreto, o
programa pede outro. Ao acertar, o laço termina e exibe a mensagem.
*/

$secreto = 7;
$palpite = 0;

while ($palpite != $secreto) {
    echo "Adivinhe o número: ";
    $palpite = (int) trim(fgets(STDIN));
}

echo "Parabéns, você acertou!" . PHP_EOL;

?>
