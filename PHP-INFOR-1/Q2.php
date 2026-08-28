<?php
$n1 = 10;
$n2 = 30;
$n3 = 20;

if ( $n1 > $n2 and $n3 and $n2 < $n3){
    echo" o maior numero: $n1, o menor: $n2";
} elseif ($n1>$n2 and $n3 and $n3 < $n2){
    echo " o maior: $n1, o menor: $n3";
} elseif ($n2>$n1 and $n3 and $n1<$n3){
    echo " o maior: $n2, o menor: $n1";
} elseif ($n2>$n1 and $n3 and $n3<$n1){
    echo" o maior: $n2, o menor:$n3";
} elseif ($n3>$n1 and $n2 and $n1<$n2){
    echo" o maior: $n3, o menor:$n1";
} elseif ($n3>$n1 and $n2 and $n2<$n1){
    echo" o maior: $n3, o menor: $n2";
}
?>