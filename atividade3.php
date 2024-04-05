<?php

$soma = 0;
$quantidade = 0;

$sequencia = [3, 2, 1, 0, -1, -2];

foreach ($sequencia as $numero) {
    if ($numero >= 0) {
        $soma += $numero;
        $quantidade++;
    }
}
if ($quantidade > 0) {
    $media = $soma / $quantidade;
    echo "a media dos valores positivos é $media\n";
}