<?php
$x=34;
echo $x;
if ($x == 34) 
    echo "<br>x é 34";
else 
    echo "x não é igual a 34";
function paridade($x) 
{
    if ($x % 2 == 0) 
        echo "<br>$x é par";
    else 
        echo "<br>$x é ímpar";
}
paridade(500);
?> 