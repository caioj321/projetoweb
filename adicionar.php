<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['nome_usuario'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acervo de Livros</title>
</head>
<body>
    <h1>Acervo de livros</h1>
    <p>Consulte, adicione ou devolva livros</p>
    <?php 
    $snome = "localhost";
    $rnome = "root";
    $bsenha = "";

    $db_nome = "teste_db";

    $con = mysqli_connect($snome, $rnome, $bsenha, $db_nome);

    $query = "SELECT * from livros";

    $resultado = mysqli_query($con, $query);
    
    ?>
    <table border="1px">
        <tr>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Número de Páginas</th>
        </tr>
        <?php 
        while($texto=$resultado->fetch_assoc()){
        ?>
        <tr>
            <?php 
            echo "<td>{$texto['codigo']}</td>";
            echo "<td>{$texto['titulo']}</td>";
            echo "<td>{$texto['autor']}</td>";
            echo "<td>{$texto['nPaginas']}</td>";
        
            ?>
        </tr>
        <?php 
        }
        ?>
    </table>
    <button onclick="location='sugestao.php';">Sugerir Livro</button>
    <button onclick="location='principal.php';">Voltar</button>
</body>
</html>
<?php 
}
else {
    header("Location: index.php");
    exit();
}
?>