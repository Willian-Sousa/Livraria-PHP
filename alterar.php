<?php
    include_once("conexao.php");

    //extrai o id da tabela selecionada a partir da lista, para realizar as modificações apenas naquela tabela
    $id = $_GET['id'];


    mysqli_close($conexao);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "_css/estilo.css">
    <title>AOKI-LIVRARIA: Alterar Cadastro</title>
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
        <form method="post" action="salvar_alteracao.php">
            <h3>Alterar Cadastros</h3>
            <h4>Digite apenas nos campos que deseja alterar.</h4>
            <?php 
                echo "<input type='hidden' value='$id' name='id'>";
            ?>
            
            <div class="campo">
                <input type="text" maxlength="100" name="titulo">
                <label>Título</label>
            </div>
            <div class="campo">
                <input type="text" maxlength="60" name="nome_autor">
                <label>Autor</label>
            </div>
            <div class="campo">
                <input type="text" name="ano">
                <label>Ano</label>
            </div>
            <div class="campo">
                <input type="text" maxlength="60" name="editora">
                <label>Editora</label>
            </div>
            <div class="campo">
                <input type="text" name="preco">
                <label>Preço</label>
            </div>
            <div class="campo">
                <input type="text" name="qnt">
                <label>Quantidade</label>
            </div>
            <div class="campo">
                <input type="text" name="tipo">
                <label>Tipo</label>
            </div>
    
        <br><br>
        <input id='btn' type="submit" value="Alterar" class="btn">
    </form>
    </div> 
    <footer>
        <p>&copy; Aoki-Livraria: Todos os direitos reservados</p>
    </footer>  
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>