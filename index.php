<?php 
session_start();
if(!isset($_POST['logout'])){
    unset($_SESSION['user']);
}

if(!isset($_SESSION['nomeusuario'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="hidden" name="logout" value="1"/>
    <button type="submit" value="logout">Sair</button>
    </form>
</body>
</html>