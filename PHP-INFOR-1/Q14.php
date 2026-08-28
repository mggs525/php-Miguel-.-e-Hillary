<?php

$valordahoras = 20;
$qnthoras = 60;

$valorpagamento = $valordahoras * $qnthoras;

if ($qnthoras <= 40) {
    echo "Valor do pagamento: $valorpagamento";
    
} elseif ($qnthoras > 40 and $qnthoras <= 60) {
    $horas_extras = $qnthoras - 40;
    $valorpagamento = ($valordahoras * 40) + ($horas_extras * ($valordahoras * 1.5));
    echo "Valor do pagamento com 50% de acréscimo: $valorpagamento";
    
} else {
    $horas_extras = $qnthoras - 40;
    $valorpagamento = ($valordahoras * 40) + ($horas_extras * ($valordahoras * 2.0));
    echo "Valor do pagamento com acréscimo: $valorpagamento";
}

?>