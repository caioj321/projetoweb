<?php 
session_start();
include "db_connect.php";

if(isset($_POST['usuario']) && isset($_POST['senha'])){
        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
}

$usuario = validar($_POST['usuario']);
$senha = validar($_POST['senha']);

if(empty($usuario)){
    header("Location: index.php");
    echo 'Usuário Incorreto.';
    exit();
}
else if(empty($senha)){
    header("Location: index.php");
    echo "Senha incorreta";
    exit();
}

$sql = "SELECT * FROM usuarios WHERE nome_usuario='$usuario' AND senha='$senha'";

$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) === 1) {
    $row = mysqli_fetch_assoc($resultado);
    if($row['nome_usuario'] === $usuario && $row['senha'] === $senha) {
        echo 'Entrando...';
        $_SESSION['nome_usuario'] = $row['nome_usuario'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['id'] = $row['id'];
        header("Location: principal.php");
    
    } else {
        header("Location: index.php?error=Usuario/Senha incorretos.");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}
?>