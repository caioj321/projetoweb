<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome_usuario'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['nome_usuario']; ?></h1>
    <input type="button" onclick="location='adicionar.php'" placeholder="teste"/>
    <h2><a href="logout.php">Sair</a></h2>
</body>
</html>
<?php 
}
else {
    header("Location: index.php");
    exit();
}
?>