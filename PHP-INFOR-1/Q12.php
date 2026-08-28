<?php
$peso = 47;
$altura = 1.6;
$imc1 = $peso / ($altura * $altura);

if ($imc1 <= 18.5){
    echo"$imc1, Abaixo do peso";
}elseif ($imc1 > 18.5 and $imc1 <= 25){
    echo"$imc1, Peso normal";
}elseif ($imc1 > 25 and $imc1 <=30){
    echo"$imc1, Acima do peso";
}elseif ($imc1 > 30 and $imc1 <=40){
    echo"$imc1, Obeso";
}elseif ($imc1 >40){
    echo"$imc1, Obesidade Grave";
}
?>
