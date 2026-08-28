<?php
$velocidade = 12;
$cansada = true;
$chovendo = true;

if ($chovendo && $cansada) {
    if ($velocidade <= 12 && $velocidade >= 10) {
        echo "Velocidade Adequada";
    } else {
        echo "Velocidade Inadequada";
    }
}
elseif ($cansada) {
    if ($velocidade <= 15 && $velocidade >= 10) {
        echo "Velocidade Adequada";
    } else {
        echo "Velocidade Inadequada";
    }
}
elseif ($chovendo) {
    if ($velocidade <= 12 && $velocidade >= 10) {
        echo "Velocidade Adequada";
    } else {
        echo "Velocidade Inadequada";
    }
}
else {
    if ($velocidade <= 20 && $velocidade >= 10) {
        echo "Velocidade Adequada";
    } else {
        echo "Velocidade Inadequada";
    }
}
?>