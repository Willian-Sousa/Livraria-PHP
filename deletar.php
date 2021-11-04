<?php
    include_once("conexao.php");

    $id = $_GET['id'];

    $sql_acervo = "delete from acervo where id=$id";
    $delete_acervo = mysqli_query($conexao, $sql_acervo) or die(mysqli_error($conexao));

    mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "_css/estilo.css">
    <title>AOKI-LIVRARIA: Cadastro</title>
</head>
<body>
    <header>
        <a href="index.html">
            <h1>AOKI-LIVRARIA</h1>
        </a>
        <h2>Sistema de Controle de Acervo</h2>
        <div class="menu">
            <nav>
                <ul>
                    <a href="index.html"><li>Cadastro</li></a>
                    <a href="lista.php"><li>Lista do Acervo</li></a>
                </ul>
            </nav>
        </div>
    </header>

    <div class="box">
        <h4>Livro deletado com sucesso!</h4>

        <button id= 'btn' class="btn">
            <a href='lista.php' id='btn'>Voltar à lista</a>
        </button>

    </div> 
    <footer>
        <p>&copy; Aoki-Livraria: Todos os direitos reservados</p>
    </footer>  
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>