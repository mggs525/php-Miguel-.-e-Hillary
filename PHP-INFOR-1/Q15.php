<?php
$kwh = 400;
$valor = 0;
$valortotal = 0;

if ($kwh <=100){
    $valor = 0.50;
    $valortotal = $kwh * $valor;
    echo "O consumo foi $kwh kWh, o valor a cada kWh é $valor, e a conta foi $valortotal.";
}elseif ($kwh >100 and $kwh <=200){
    $valor = 0.70;
    $valortotal = $kwh * $valor;
    echo "O consumo foi $kwh kWh, o valor a cada kWh é $valor, e a conta foi $valortotal.";
}elseif ($kwh >200 and $kwh <=300){
    $valor = 0.90;
    $valortotal = $kwh * $valor;
    echo "O consumo foi $kwh kWh, o valor a cada kWh é $valor, e a conta foi $valortotal.";
}elseif ($kwh >300){
    $valor = 1.10;
    $valortotal = $kwh * $valor;
    echo "O consumo foi $kwh kWh, o valor a cada kWh é $valor, e a conta foi $valortotal.";
}
?>