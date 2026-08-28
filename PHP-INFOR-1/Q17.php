<?php 
$numtentativa = 1;
$linhaatual = [2,3,];
$colunaatual = [3,2];

if (
    ($numtentativa >= 1  && $numtentativa <=3)&&
!in_array( $numtentativa, $linhaatual )&&
!in_array( $numtentativa, $colunaatual)
){
    echo"certo, a jogada  é possivel";
} else {
    echo " errado, a jogada não é posivel";
}
?>