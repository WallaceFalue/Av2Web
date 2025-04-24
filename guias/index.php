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
    <nav>
        <h1><a href="../index.html">MegaByte<span class="letraMinuscula">.Shopping</span></a></h1>
        <div class="menu">
            <a href="promocoes.html">Promoções</a>
            <a href="PC Gamer.html">PC Gamer</a>
            <a href="upgradeEperifericos.html">Kit Upgrade e periféricos</a>
            <a href="monteSeuPC.html">Monte seu PC</a>
            <a href="novidades.html">Novidades</a>
            <a href="sobreNos.html">Sobre Nós</a>
            <a href="Contato.html">Contato</a>
            <a href="index.php" class="active">Login</a>
        </div>
    </nav>
    <div class="caixaLoginContainer">   
            <div id="form">
                <h1>Seja bem vindo!</h1><br>
                <h2>Prencha os campos abaixo para fazer login na sua conta MegaByte Store:</h2>
                <form name="form" action="login.php" method="post" class="caixaLogin">
                    <label for="usuario">Usuário: </label>
                    <input type="text" id="user" name="user"><br><br>
                    <label for="senha">Senha: </label>
                    <input type="password" id="pass" name="pass"><br><br>
                    <input type="submit" id="btn" value="login" name="submit">
                </form>
            </div>
        <img src="../imagens/Propaganda login.png" alt="" class="imagemLogin">
    </div>
    <footer>
      <h3>Contato:</h3>
      <p>E-mail: MegaByte@gmail.com</p>
      <p>Telefone: (21) 98556-2858</p>
      <p>(21) 98556-2858</p>
      <p>(21) 98556-2858</p>
    </footer>
</body>

</html>