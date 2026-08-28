<?php
$valorSaque = 256;

if ($valorSaque < 10) {
    echo "Valor inválido. O valor mínimo para saque é 10 reais.";
} elseif ($valorSaque > 600) {
    echo "Valor inválido. O valor máximo para saque é 600 reais.";
} else {
    $nota100 = 0;
    $nota50  = 0;
    $nota10  = 0;
    $nota5   = 0;
    $nota1   = 0;

    $resto = $valorSaque;

    if ($resto >= 100) {
        $nota100 = (int)($resto / 100);
        $resto = $resto % 100;
    }

    if ($resto >= 50) {
        $nota50 = (int)($resto / 50);
        $resto = $resto % 50;
    }

    if ($resto >= 10) {
        $nota10 = (int)($resto / 10);
        $resto = $resto % 10;
    }

    if ($resto >= 5) {
        $nota5 = (int)($resto / 5);
        $resto = $resto % 5;
    }

    if ($resto >= 1) {
        $nota1 = (int)($resto / 1);
        $resto = $resto % 1;
    }

    echo "Valor do saque: R$ " . $valorSaque . "<br>";
    echo "Notas fornecidas:<br>";
    
    if ($nota100 > 0) {
        echo "- " . $nota100 . " nota(s) de R$ 100<br>";
    }
    if ($nota50 > 0) {
        echo "- " . $nota50 . " nota(s) de R$ 50<br>";
    }
    if ($nota10 > 0) {
        echo "- " . $nota10 . " nota(s) de R$ 10<br>";
    }
    if ($nota5 > 0) {
        echo "- " . $nota5 . " nota(s) de R$ 5<br>";
    }
    if ($nota1 > 0) {
        echo "- " . $nota1 . " nota(s) de R$ 1<br>";
    }
}
?>