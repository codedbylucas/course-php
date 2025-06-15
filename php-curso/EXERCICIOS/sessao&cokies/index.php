<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="POST">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario">
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="password">
        <br>
        <label for="lembrar">Tema Preferido: </label>
        <select name="tema">
            <option value="escuro">Escuro</option>
            <option value="claro">Claro</option>
        </select>
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>