<?php
function sum($number1,$number2,$number3){
    $result=$number1+$number2+$number3;
    if($result>=210){
        echo "合計点は OO なので合格です";
    }else{
        echo "合計点は OO なので不合格です";
    }
}

sum(100,80,10);

