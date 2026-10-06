<?php
$vetor = array(1,-2,3,4,5,6,7);
echo "O mínimo é: " . min($vetor);
echo "<br>A média é: " . array_sum($vetor) / count($vetor);
echo "<br>A soma é: " . array_sum($vetor);
$somap=0;$soman=0;
foreach($vetor as $a)
    {
    if($a>0)
        $somap+=$a;
    if($a<0)
        $soman+=$a;
    }
echo "<br>A soma dos positivos é: " . $somap;
echo "<br>A soma dos negativos é: " . $soman ;    
echo "<br>Exercicio2<br>";
echo "Números aleatórios: ";
$chave=array();
for($i=0;$i<5;$i++)
{
$num=rand(1,50);
if (in_array($num,$chave)==0)
    {$chave[$i]=$num;echo $num, " ";}
else
    $i--;
}

echo "<br>Exercicio 3";

$cavalos = array("José" =>6,"Maria" =>8,"João" =>5,"Pedro" =>7,"Lucas" =>9,"Ana" =>10,"Carla" =>4,"Marcos" =>3,"Beçós" =>2,"Rafael" =>11);
asort($cavalos); $a=1;
foreach ($cavalos as $chave => $valor) {
    if($a==1){  
    {echo "<br>O vencedor é: $chave com $valor segundos";break;}
    }
}
?>