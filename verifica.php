<?php 
$usuarios = [
    "teste" => "banana123",
    "admin" => "admin321"
];
session_start();


if(isset($_POST['nomeusuario']) && !isset($_SESSION['nomeusuario'])){
    if($usuarios[$_POST['nomeusuario']] == $_POST['senha']){
        $_SESSION['nomeusuario'] = $_POST['nomeusuario'];
    }

    if(!isset($_SESSION['nomeusuario'])) {
        $falha = true;
    }
}

if(isset($_SESSION['nomeusuario'])){
    header("Location: index.php");
    exit();
}
?>