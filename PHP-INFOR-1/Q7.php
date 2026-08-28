<?php

$lado1 = 5;
$lado2 =3;
$lado3 = 2;

 if($lado1 == $lado2 and $lado1 == $lado3 and $lado2 == $lado3){
    echo"Este triângulo é Equilátero";
 }elseif ($lado1 == $lado2 and $lado1 <> $lado3 and $lado2 <> $lado3){
    echo"Este triângulo é Isóceles";
 }elseif ($lado1 <> $lado2 and $lado2 <> $lado3 and $lado1 <> $lado3){
    echo"Esse triângulo é Escaleno";
 }
?>