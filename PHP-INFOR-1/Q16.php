<?php
$força = 5;
$inteligencia = 10;
$agilidade = 7;

if ($força == $inteligencia || $força == $agilidade || $inteligencia == $agilidade){
    echo"Você é Híbrido";
}elseif ($força > $inteligencia and $força > $agilidade){
    echo"Você é Guerreiro";
}elseif ($inteligencia > $força and $inteligencia > $agilidade){
    echo"Você é Mago";
}elseif ($agilidade > $força and $agilidade > $inteligencia){
    echo"Você é Arqueiro";
}