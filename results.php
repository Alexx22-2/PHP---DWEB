<?php
echo "<h2>Resultados do Formulário</h2>";
$n=$_POST['nome'];
echo "Nome: $n <br>";
$a=$_POST['apelido'];
echo "Apelido: $a <br>";
$ctesp=$_POST['ctesp'];
echo "Aluno de CTESP informática: $ctesp <br>";
$idade=$_POST['idade'];
echo "Idade: $idade <br>";
$localidade=$_POST['localidade'];
echo "Localidade: $localidade <br>";
$sugestoes=$_POST['sugestoes'];
echo "Sugestões: $sugestoes <br>";
?>