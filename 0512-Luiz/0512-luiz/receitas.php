<?php
// variaveis de controle
$paginaAtual = 'Produtos';

include_once './includes/_functions.php';
include_once './includes/_dados.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
?>

    <section id="produtos">
        <div class="row">
    <?php
    // laco de repeticao 
    foreach ($dadosProdutos as $key => $value) {
    ?>
        <div class="card col-3" style="width: 18rem;">
            <a href="./produto-detalhe.php?id=<?php echo $key;?>">
                <img class="card-img-top" src="./Receitas/<?php echo $value['imagem']?>" alt="<?php echo $value['nome'];?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $value['nome']?></h4>
                    <span class="card-price">R$ <?php echo ConverterEmMoeda($value['preco']);?></span>
                </div>
            </a>
        </div>
    <?php
    }
    ?>
        </div>
    </section>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>