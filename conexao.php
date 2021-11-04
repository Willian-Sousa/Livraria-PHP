<?php
    $host_name = "localhost";
    $user = "root";
    $password = "";
    $db_name = "acervo_livraria";
    $conexao = mysqli_connect($host_name, $user, $password, $db_name);

    mysqli_set_charset($conexao, 'utf8');

    if(!$conexao){
        echo "Falha na conexão com o Banco de Dados";
    }
?>