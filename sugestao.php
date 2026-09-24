<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome_usuario'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerir um livro</title>
</head>
<body>
    <h1>Envie uma sugestão de livro para o acervo</h1>
    <label>Titulo do Livro</label>
    <input type="text" name="titulo" placeholder="Titulo"/>
    <label>Autor</label>
    <input type="text" name="autor" placeholder="Nome do Autor"/>
    <label>Número de Páginas</label>
    <input type="text name="nPaginas" placeholder="Número de Páginas"/>
    <label>Gênero</label>
    <input type="text" name="genero" placeholder="Gênero do Livro"/>
    <button type="submit" onclick= "location='adicionar.php'">Enviar Sugestão</button>
</body>
</html>
<?php 
}
else {
    header("Location: index.php");
    exit();
}
?>