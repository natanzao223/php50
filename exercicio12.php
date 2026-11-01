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
Descritivo: DO-WHILE: menu de opções repetido até escolher "Sair".
*******************************************************************************/

/*
Explicação: o do-while mostra o menu pelo menos uma vez, lê a opção e
responde conforme a escolha. O laço só termina quando a opção for 3 (Sair).
*/

do {
    echo PHP_EOL . "1. Iniciar" . PHP_EOL;
    echo "2. Parar" . PHP_EOL;
    echo "3. Sair" . PHP_EOL;
    echo "Escolha uma opção: ";
    $opcao = (int) trim(fgets(STDIN));

    if ($opcao == 1) {
        echo "Iniciando..." . PHP_EOL;
    } elseif ($opcao == 2) {
        echo "Parando..." . PHP_EOL;
    } elseif ($opcao == 3) {
        echo "Saindo..." . PHP_EOL;
    } else {
        echo "Opção inválida!" . PHP_EOL;
    }
} while ($opcao != 3);

?>