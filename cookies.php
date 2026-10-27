<?php
  if ($_POST["cor"]=="red")
    {
        setcookie("cor", "red");
    }
    else if ($_POST["cor"]=="green")
    {
        setcookie("cor", "green");
    }
    else if ($_POST["cor"]=="blue")
    {
        setcookie("cor", "blue");
    }
?>
<html>
    <head></head>
    <body>
        <h1>Cookie criada com sucesso!</h1>
        <a href="Ficha6.php">Voltar</a>
    </body>
</html>