<?php

function cowsay($message)
{
    $cow = "
  ----------------
< $message >
  ----------------
         \\   ^__^
          \\  (oo)\\_______
             (__)\\       )\\/\\
                 ||----w |
                 ||     ||
";

    echo $cow;
}
$message = "OI Bill, desculpa pelo atraso da atividade, mas ENTREGUE!!!!";
cowsay($message);

