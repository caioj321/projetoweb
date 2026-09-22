<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <?php 
    require "verifica.php";
    if(isset($falha)) {
        echo "<div> Usuário/Senha inválida.</div>";
    }
    ?>
    <form action="login.php" method="post">
        <label>Nome de Usuário</label>
        <input type="text" name="nomeusuario" placeholder="Nome de usuário"><br>
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Senha"><br>

        <button type= "submit">Entrar</button>
    </form>
</body>
</html>