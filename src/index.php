<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login para formulário</h1>
    <form action=".\model\autenticador.php" method="post">
        
    <label for="usuário">Usuário:</label>
    <input type="text" name="usuário" id="usuário">

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">

    <input type="submit" value="enviar">

    </form>
</body>
</html>