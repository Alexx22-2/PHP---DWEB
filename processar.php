<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>Resultados do Formulário</h2>";
    $nome = $_POST['nome'] ?? 'Anónimo';
    $d = $_FILES['ficheiro'];
    echo "Nome: $nome <br>";
    echo "Ficheiro: " . $d['name'] . "<br>";

$pasta = 'documentos/';
if (is_dir($pasta)) {
    echo "A pasta existe.<br>";
} else {
    mkdir($pasta);
    echo "A pasta não existia, foi criada.<br>";
}
if (move_uploaded_file($d['tmp_name'], $pasta . $d['name'])) {
    echo "Ficheiro guardado em $destino";
    
}else{
    echo "Falha ao enviar o ficheiro.";
}

}else{
    echo "Acesso inválido.";
}
?>