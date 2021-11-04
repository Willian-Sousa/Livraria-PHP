<?php
    include_once("conexao.php");

    /*Tabela Editora*/
    $editora = $_POST['editora'];

    /* pegar numero de id da editora*/
    $sql_consulta_editora = "Select id from editora where nome = '$editora'";
    $consulta_id = mysqli_query($conexao, $sql_consulta_editora);
    $registro = mysqli_num_rows($consulta_id); 
    
      

    /*condição para inserir uma nova editora ou usar uma editora já cadastrada*/
    if($registro < 1){
        $sql = "insert  into editora set nome = '$editora'";
        $salvar = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }
    

    /* Tabela Acervo*/
    //variáveis para o formulário
    
    $titulo = $_POST['titulo'];
    $nome_autor = $_POST['nome_autor'];
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['qnt'];
    $tipo = $_POST['tipo'];
    
    // buscar id da editora para atribuir na tabela acervo
    $sql_consultar = "select id from editora where nome = '$editora'";
    $consultar = mysqli_query($conexao, $sql_consultar) or die(mysqli_error($conexao));
    $exibir_consulta = mysqli_fetch_array($consultar);
    $id_editora = $exibir_consulta[0]; // corresponde ao conteúdo da coluna id da tabela editora


    /*Inserir valores na Tabela Acervo*/
    $sql1 = "insert into acervo (titulo, autor, ano, preco, quantidade, tipo, idEditora) values ('$titulo', '$nome_autor', $ano, $preco, $quantidade, $tipo, $id_editora)";

    $salvar1 = mysqli_query($conexao, $sql1) or die(mysqli_error($conexao));
    
    //fechar conexão
    mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "_css/estilo.css">
    <title>AOKI-LIVRARIA: Confirmação de Cadastro</title>
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
        <h3>Cadastro efetuado com sucesso!</h3>
        <br>
        <button id= 'btn' class = "btn">
            <a href="index.html">Retornar para tela de cadastro</a>
        </button>
    </div> 
    <footer>
        <p>&copy; Aoki-Livraria: Todos os direitos reservados</p>
    </footer>   
</body>
</html>