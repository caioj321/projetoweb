<?php 
    $snome = "localhost";
    $rnome = "root";
    $bsenha = "";

    $db_nome = "teste_db";

    $con = mysqli_connect($snome, $rnome, $bsenha, $db_nome);

    if(!$con){
        echo "Falha na conexão";
    }
?>