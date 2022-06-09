<?php
// variaveis de controle
$paginaAtual = 'Produto Detalhe';

include_once './includes/_functions.php';
include_once './includes/_dados.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina

// conteudo da pagina
$id = $_GET['id'];
$produto = $dadosProdutos[$id];

?>

    <h1><?php echo $produto['nome']?></h1>
    <hr>
    <p><?php echo $produto['descricao'];?></p>
    <img src="./produtos/<?php echo $produto['imagem'];?>"/>
    <hr>
    <span>R$ <?php echo ConverterEmMoeda($produto['preco']);?></span>
    <span>
        <a href="./produtos.php">Voltar</a>
    </span>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>