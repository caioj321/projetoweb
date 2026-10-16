<?php 
require_once('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se na biblioteca</title>
</head>
<div>
    <?php 
    if(isset($_POST['criar'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuarios (usuario, senha) VALUES (?, ?)";
        $statementinsert = $con->prepare($sql);
        $result = $statementinsert->execute([$usuario, $senha]);
        if($result){
            echo 'Usuário criado';
        } else {
            echo 'Erro ao criar usuário';
        }
    }
    ?>
</div>
<div>
<form action="cadastro.php" method="post">
    <h1>Realizar cadastro</h1>
    <label for="usuario"><b>Usuário</b></label>
    <input type="text" name="usuario" required>
    <label for="senha"><b>Senha</b></label>
    <input type="text" name="senha" required>
    <input type="submit" name="criar" value="Criar Conta">
</form>
</div>
<body>
    
</body>
</html>