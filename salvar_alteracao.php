<?php
    include_once("conexao.php");


    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $nome_autor = $_POST['nome_autor'];
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['qnt'];
    $tipo = $_POST['tipo'];
    $editora = $_POST['editora'];
    

    if($titulo != ""){
        $alterar_titulo = "update acervo set titulo = '$titulo' where id = $id";
        $slq = mysqli_query($conexao, $alterar_titulo) or die(mysqli_error($conexao));
    }

    if($nome_autor != ""){
        $alterar_autor = "update acervo set autor = '$nome_autor' where id = $id";
        $sql = mysqli_query($conexao, $alterar_autor) or die(mysqli_error($conexao));
    }

    if($ano != ""){
        $alterar_ano = "update acervo set ano = $ano where id = $id";
        $sql = mysqli_query($conexao, $alterar_ano) or die(mysqli_error($conexao));
    }

    if($preco != ""){
        $alterar_preco = "update acervo set preco = $preco where id = $id";
        $sql = mysqli_query($conexao, $alterar_preco) or die(mysqli_error($conexao));
    }
    if($quantidade != ""){
        $alterar_quantidade = "update acervo set quantidade = $quantidae where id = $id";
        $sql = mysqli_query($conexao, $alterar_ano) or die(mysqli_error($conexao));
    }
    if($editora != ""){
        $alterar_editora = "update editora join acervo on editora.id = acervo.idEditora set editora.nome = '$editora' where acervo.idEditora = $id";
        $sql = mysqli_query($conexao, $alterar_editora) or die(mysqli_error($conexao));
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>AOKI-LIVRARIA: Lista do Acervo</title>
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
        <h3>Alteração realizada com sucesso!</h3>
        <div class="alterar">
            <?php
                echo "<h4>Verifique as novas alterações</h4>";
                if($titulo!=""){
                    echo "Título: $titulo<br>";
                }else{
                    echo "Título: Sem alteração.<br>";
                }
                if($nome_autor!=""){
                echo "Autor: $nome_autor<br>";
                }else{
                    echo "Autor: Sem alteração.<br>";
                }
                if($ano!=""){
                echo "Ano: $ano<br>";
                }else{
                    echo "Ano: Sem alteração.<br>";
                }
                if($preco!=""){
                printf("Preço: R$%.2f", $preco);
                echo "<br>";
                }else{
                    echo "Preço: Sem alteração.<br>";
                }
                if($quantidade!=""){
                echo "<br>Quantidade: $quantidade<br>";
                }else{
                    echo "Quantidade: Sem alteração.<br>";
                }
                if($tipo!=""){
                echo "Tipo: $tipo<br>";
                }else{
                    echo "Tipo: Sem alteração.<br>";
                }
                if($editora!=""){
                echo "Editora: $editora";
                }else{
                    echo"Editora: Sem alteração.";
                }
            
            ?>
        </div>
        <br>
        <hr>
        <button id='btn' class="btn"><a id='btn' href="lista.php">Voltar à lista</a></button>
    </div>

    <footer>
        <p>&copy; Aoki-Livraria: Todos os direitos reservados</p>
    </footer>   
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>