<?php
function fibonacci($n)
{
    if ($n == 0)
        return 0;
    else if ($n == 1)
        return 1;
    else
        return fibonacci($n - 1) + fibonacci($n - 2);
}
echo "Os primeiros 10 numeros da sequencia de Fibonacci sao:\n";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}