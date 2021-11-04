<?php
    include_once("conexao.php");

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sqlconsulta = "select acervo.*, editora.* from acervo inner join editora on acervo.idEditora = editora.id where acervo.titulo like '$filtro%'";
    $consultar = mysqli_query($conexao, $sqlconsulta) or die(mysqli_error($conexao));
    $registros = mysqli_num_rows($consultar);
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
        <h3>Lista do Acervo</h3>

        <form method="get" action="">
            <div>
                <label>Filtrar por Título</label>
                <div class="campo"><input type="text" name="filtro" required autofocus></div>  
            </div>

            <input id='btn' type="submit" value="Pesquisar" class="btn">
            
        </form>

        
        <?php
            if($filtro == ""){
                print "<p>Livros no acervo:</p>";
            }else{
            print "<p>Livros encontrados com o título <strong>$filtro</strong></p>";}
            print"<hr>";

            if($registros == 0){
                echo "<p>Nenhum livro encontrado</p>";
            }
            else if($registros < 2){
                echo "<p>$registros Livro encontrado.</p>";
            }else{
                echo "<p>$registros Livros encontrados.</p>";
            }
            echo "<hr>";
        ?>

        <?php while($exibir_registros = mysqli_fetch_array($consultar)){ ?>
            
        <?php
            $id  = $exibir_registros[0];
            $titulo = $exibir_registros[1];
            $autor = $exibir_registros[2];
            $ano = $exibir_registros[3];
            $preco = $exibir_registros[4];
            $qnt = $exibir_registros[5];
            $tipo = $exibir_registros[6];
            $id_editora = $exibir_registros[7];
            $editora_nome = $exibir_registros[9];  
        ?>
        
        
        <div class="box_lista">
            <?php
                print "<p>Número de identificação: $id</p>";
                print"<p>Título: $titulo</p>";
                print "<p>Autor: $autor</p>";
                print "<p>Ano: $ano</p>";
                printf("<p>Preço: R$ %.2f</p>", $preco);
                print "<p>Quantidade: $qnt</p>";
                print "<p>Tipo: $tipo</p>";
                print "<p>Editora: $editora_nome</p>";
            ?>
        </div>
        
        <hr>
           
                
        <form method="get" action="">
            <button class="btn">
                <a href="alterar.php?id=<?php echo $id; ?>">Aterar Informações</a>
            </button>
            <button class="btn">
                <a href="deletar.php?id=<?php echo $id ?>">Deletar Livro</a>
            </button>
        </form>
               
            
        <hr>
        
        <?php } ?>

        <?php mysqli_close($conexao);
        ?>
        
    </div>

    <footer>
        <p>&copy; Aoki-Livraria: Todos os direitos reservados</p>
    </footer>   
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>