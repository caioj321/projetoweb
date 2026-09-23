<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome_usuario'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livros</title>
</head>
<body>
    <h1>Adicionar Livros</h1>
<form action="post">
    <button onclick="history.go(-1);">Voltar</button>
</form>
</body>
</html>
<?php 
}
else {
    header("Location: index.php");
    exit();
}
?>