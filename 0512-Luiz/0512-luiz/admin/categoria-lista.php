<?php
include_once '.../includes/_dados.php';
include_once '_head.php';

$sql = "SELECT * FROM categorias";
$resultado = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($resultado);

include_once '_menu.php';
?>

    <main>
        <h2>Administrão das Categorias</h2>

        <a href="categorias-salvar.php">Inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>

            <?php
            if($resultado){
                while ($dado = mysqli_fetch_array($resultado))  {
                ?>
                <tr>
                    <td><?php echo $dado['CategoriaID']?></td>
                    <td><a href="categoria-salvar.php?acao==salvar&id<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
                </tr>
                <?php
                }
            }else{
                ?>
                <tr>
                    <td colspan="3">Resultados não encontrados</td>
                </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="">Total de registros: <?php echo $total;?></td>
                </tr>
        </table>
    </main>
    <?php
    include_once '_footer.php';
    ?>