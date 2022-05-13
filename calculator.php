<?php
function sum(float $num1,float $num2):float{
    return $num1 + $num2;
}
function diff(float $num1,float $num2):float{
    return $num1 - $num2;
}
function div(float $num1,float $num2):float{
    return $num1 / $num2;
}
function mult(float $num1,float $num2):float{
    return $num1 * $num2;
}
echo sum(10,2)."<br/>";
echo diff(10,2)."<br/>";
echo div(10,2)."<br/>";
echo mult(10,2)."<br/>";

function calculator2(float $num1,string $opp, float $num2,):float{
    if(!in_array($opp,['+','-','*','/'])){

    }
    $fucnt_name=['+'=>'sum',
                 '-'=>'diff',
                 '/'=>'div',
                 '*'=>'mult'];
    return $fucnt_name[$opp]($num1,$num2);                  
}
echo calculator2(1,'+',3);