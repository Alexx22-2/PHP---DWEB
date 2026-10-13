<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="results.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Apelido: <input type="text" name="apelido"><br>
    Aluno de CTESP informática ? <input type="checkbox" name="ctesp" checked><br>
    Idade:   <input type="radio" name="idade" value="<=20"> <=20 <br>
             <input type="radio" name="idade" value="21-30"> 21-30 <br>
             <input type="radio" name="idade" value="31-40"> 31-40 <br>
             <input type="radio" name="idade" value=">40"> >40 <br>
    Localidade: <select name="localidade">
                <option value="Chaves">Chaves</option>
                <option value="Braga">Braga</option>
        </select>
    <br>Sugestões: <textarea name="sugestoes" rows="5" cols="30" placeholder="Indique as suas sugestões"></textarea><br>
    <input type="submit" value="Submit"> <input type="reset" value="Reset">
    </form>
</body>
</html>