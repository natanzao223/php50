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
Descritivo: DO-WHILE: solicitar senha até digitar a correta ("1234").
*******************************************************************************/

/*
Explicação: o do-while pede a senha ao menos uma vez e repete enquanto
ela for diferente de "1234". Quando acerta, o programa continua.
*/

$senhaCorreta = "1234";

do {
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    if ($senha !== $senhaCorreta) {
        echo "Senha incorreta!" . PHP_EOL;
    }
} while ($senha !== $senhaCorreta);

echo "Acesso liberado!" . PHP_EOL;

?>
