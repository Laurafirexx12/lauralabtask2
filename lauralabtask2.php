<?php
function greetings(string $text): void
{
    echo "$text";
}
greetings('param3t3r');
function repeatContent(int $count = 1):void 
{
    for($i=0;$i <=$count;$i++){
        greetings(" is school hard ");

    }
}
repeatContent();
repeatContent(5);
