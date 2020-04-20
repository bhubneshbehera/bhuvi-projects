<?php
$a=100;
$b=200;
function add()
{
    global$a,$b,$c;
    
    $c=$a+$b;
}
add();
echo $c;
?>