<?php
function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        $trocou = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
                $trocou = true;
            }
        }
        if (!$trocou) {
            break;
        }
    }
    return $array;
}

$array = [5, 3, 8, 1, 2, 7, 4, 6];
echo "Array original: " . implode(", ", $array) . "\n";

$arrayOrdenado = bubbleSort($array);
echo "Array ordenado: " . implode(", ", $arrayOrdenado) . "\n";
?>