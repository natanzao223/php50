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
Descritivo: Função com String: contarVogais, que retorna o número de vogais.
*******************************************************************************/

/*
Explicação: o texto é convertido para minúsculas e percorrido caractere
a caractere. Cada caractere que estiver na lista de vogais (com acentos)
incrementa o contador, que é retornado no final.
*/

function contarVogais($texto)
{
    $vogais = ["a", "e", "i", "o", "u", "á", "é", "í", "ó", "ú",
               "â", "ê", "ô", "ã", "õ", "à"];
    $texto = mb_strtolower($texto, "UTF-8");
    $total = 0;

    for ($i = 0; $i < mb_strlen($texto, "UTF-8"); $i++) {
        $letra = mb_substr($texto, $i, 1, "UTF-8");

        if (in_array($letra, $vogais)) {
            $total++;
        }
    }

    return $total;
}

echo "Vogais: " . contarVogais("Programação em PHP") . PHP_EOL;

?>
