<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php if (isset($_COOKIE['cor'])) { echo $_COOKIE['cor']; } ?>;">
    <form action="cookies.php" method="post" enctype="multipart/form-data">
    <input type="radio" name="cor" value="red"> Vermelho<br>
    <input type="radio" name="cor" value="green"> Verde<br>
    <input type="radio" name="cor" value="blue"> Azul<br>
    <button type="submit" value="Criar">Criar Cookie</button>
    </form>
</body>
</html>