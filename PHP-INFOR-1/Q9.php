<?php 
$pergunta1 = "N";
$pergunta2 = "N";
$pergunta3 = "N";
$pergunta4 = "N";
$pergunta5 = "N";
$contadors = 0;

if($pergunta1 =="S"){
    $contadors++;
}
if($pergunta2 =="S"){
    $contadors++;
}
if($pergunta3 =="S"){
    $contadors++;
}
if($pergunta4 =="S"){
    $contadors++;
}
if($pergunta5 =="S"){
    $contadors++;
}

if($contadors == 5){
    echo"Assasino";
}elseif($contadors == 3 || $contadors == 4){
    echo"Cúmplice";
}elseif($contadors ==2){
    echo"Suspeito";
}elseif($contadors ==1 || $contadors ==0){
    echo"Inocente";
}