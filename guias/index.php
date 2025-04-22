<?php
    include("conection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css" />
</head>
<body>
    <div id="form">
        <h1>Login form</h1>
        <form name="form" action="login.php" method="post">
            <label for="usuario">Usuário: </label>
            <input type="text" id="user" name="user"><br><br>

            <label for="senha">Senha: </label>
            <input type="password" id="pass" name="pass"><br><br>

            <input type="submit" id="btn" value="login" name="submit">
        </form>
    </div>
</body>
</html>
