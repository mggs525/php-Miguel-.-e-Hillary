<?php
for ($i = 1; $i <=100; $i++) {
    if($i % 3 == 0){
        echo"Eiiii\n";
    }elseif ($i % 5 ==0){
        echo"Acordaaaa\n";
    }elseif ($i % 3 ==0 and $i % 5==0){
        echo"Eiiii, Acordaaaa\n";
    }else{
        echo"$i\n";
    }
}