<?php

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    return $imc;
}
$peso = 100;
$altura = 1.70;
$imc = calcularIMC($peso, $altura);
echo "O IMC é: " . round($imc, 2) . "\n";
?>

