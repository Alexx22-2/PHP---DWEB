<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processar.php" method="post" enctype="multipart/form-data">
    <label>Nome: <input type="text" name="nome"></label><br>
    <label>Ficheiro: <input type="file" name="ficheiro" accept=".pdf,image/*"></label><br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>