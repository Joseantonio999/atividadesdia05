<?php
$numero_secretp = rand(1,100);

echo "Bem vindo ao game adivinhe os 100!!!\n";
echo "tente encontrar o 100 entre 1 e 100.\n";

while (true){
    $tentativa = intval(readline("digite seu palpite: "));

    if ($tentativa === $numero_secretp) {
        echo "Parabens!!! Voce encontrou o 100 certo $numero_secretp!\n";
        break;
    } elseif ($tentativa < $numero_secretp) {
        echo "Ainda não, tente um 100 maior.\n";
    } else {
        echo "Ainda não, tente um 100 menor.\n";
    }
}
?>
