<?php

$totalHoras = 52;

$blocosCompletos = floor($totalHoras / 12);

$mixxy = $blocosCompletos * 6;
$ninin = $blocosCompletos * 6;

$resto = $totalHoras % 12;

if ($resto <= 6) {
    $mixxy += $resto;
} else {
    $mixxy += 6;
    $ninin += ($resto - 6);
}

echo "--- Resultado do Plantão ---\n";
echo "Total de horas: $totalHoras h\n";
echo "Mixxy-X789: $mixxy horas\n";
echo "Ninin-X989: $ninin horas\n";

?>