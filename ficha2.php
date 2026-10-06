<?php
function imprimeRetangulo($altura) 
{
   for($i=1; $i<$altura; $i++)
    echo "<br>*****";
}
imprimeRetangulo(5);

echo "<br><br>";

function trocaValores($a, $b)
{
    echo "Recebi em A: $a e em B: $b";
    $aux = $a;
    $a = $b;
    $b = $aux;
    echo "<br>Depois da troca, A: $b e em B: $a";

}
trocaValores(5, 7);
?>
