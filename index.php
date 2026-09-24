<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h1 class= "titulo">Login</h1>
        <?php if(isset($_GET['error'])) { ?> 
            <p class="error"><?php echo $_GET['error']; ?> </p>
           <?php } ?>
           <label class="usuarioPedido"> Nome de Usuário </label>
           <input type="text" name="usuario" placeholder="Nome"><br>
           <label class="senhaPedido"> Senha </label> 
            <input type="password" name="senha"  placeholder="Senha"><br>
            <button class= "botao" type= "submit">Entrar</button>
    </form>
</body>
</html>