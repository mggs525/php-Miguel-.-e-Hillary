<?php
$nt1 = 10;
$nt2 = 2;
$md1 = ($nt1+$nt2);
$md2 = ($md1/2);

if ($md2 <=10 and $md2 >=9){
    echo"Sua média foi $md2, APROVADO!, rank A";
}elseif ($md2 <=9 and $md2 >=7.5){
    echo"Sua média foi $md2, APROVADO!, rank B";
}elseif ($md2 <=7.5 and $md2 >=6){
    echo"Sua média foi $md2, APROVADO!, rank C";
}elseif ($md2 <=6 and $md2 >=4){
    echo"Sua média foi $md2, REPROVADO!, rank D";
}elseif ($md2 <=4 and $md2 >=0){
    echo"Sua média foi $md2, REPROVADO!, rank E";
}
?>