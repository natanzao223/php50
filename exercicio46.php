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
Descritivo: Função: ehPrimo, que retorna true se o número for primo e false caso contrário.
*******************************************************************************/

/*
Explicação: números menores que 2 não são primos. Para os demais, o for
testa divisores de 2 até a raiz do número; se algum divide exatamente,
retorna false. Se nenhum divide, retorna true.
*/

function ehPrimo($numero)
{
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

foreach ([1, 2, 9, 17, 25, 29] as $n) {
    echo $n . ": " . (ehPrimo($n) ? "primo" : "não primo") . PHP_EOL;
}

?>
