<?php
$s = 2000;
$sa = 0;
$smuda = 0;

if ($s <=280){
    $sa = ($s /100) *20;
    $smuda = ($s+$sa);
    echo"O salario antes, era $s, percentual de aumento foi 20%, o valor do aumento foi de $sa, e o salario apos a mudança é $smuda.";
}elseif ($s >=280 and $s <=700){
    $sa = ($s /100) *15;
    $smuda = ($s+$sa);
    echo"O salario antes, era $s, percentual de aumento foi 15%, o valor do aumento foi de $sa, e o salario apos a mudança é $smuda.";
}elseif ($s >=700 and $s <=1500){
    $sa = ($s /100) *10;
    $smuda = ($s+$sa);
    echo"O salario antes, era $s, percentual de aumento foi 10%, o valor do aumento foi de $sa, e o salario apos a mudança é $smuda.";
}elseif ($s >=1500){
    $sa = ($s /100) *5;
    $smuda = ($s+$sa);
    echo"O salario antes, era $s, percentual de aumento foi 5%, o valor do aumento foi de $sa, e o salario apos a mudança é $smuda.";
}
