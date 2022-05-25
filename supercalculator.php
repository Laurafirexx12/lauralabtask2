<?php
function sum(float ...$nums):float{
$add=0;
 foreach($nums as $num){
$add=($num+$add);

    }
    return $add;
    
}

function diff(float ...$num1):float{
    $diff=0;
    foreach($num1 as $num){
        $add=($num=$diff);
    }
    return $diff;
}
function div(float ...$num2):float{
    $div=0;
    return $num1 / $num2;
}
function mult(float $num1,float $num2):float{
    return $num1 * $num2;
}