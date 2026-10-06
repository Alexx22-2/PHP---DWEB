<?php
function calcularRaizes($a, $b, $c)
{
    $delta = ($b * $b) - (4 * $a * $c);

    if ($delta < 0) {
        return "Não existem raízes reais.";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Raiz única: x = $x";
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Raízes: x1 = $x1 e x2 = $x2";
    }
}

echo calcularRaizes(1, -3, 2) . "<br>";   // Delta > 0
echo calcularRaizes(1, 2, 1) . "<br>";    // Delta = 0
echo calcularRaizes(1, 1, 1) . "<br>";    // Delta < 0
?>