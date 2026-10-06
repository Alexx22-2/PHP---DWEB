<?php
function inverterString($texto)
{
    $tamanho = strlen($texto);
    for ($i = $tamanho -1; $i >= 0; $i--) {
        echo $texto[$i];
    }
}
inverterString("O Tomas e Gay!!");
?>