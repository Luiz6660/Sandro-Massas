<?php
// variaveis de controle
$paginaAtual = 'Contato';


include_once './includes/_dados.php'; #inclui arquivo de dados
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina
?>

    <h1>contato</h1>
    <hr>
    <form action="envia.php" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="txtName">Nome Completo</label>    
                <input type="text" name="txtNome" required>
            </li>
            <li>
                <label for="txtEmail">E-mail</label>
                <input type="Email" name="txtEmail" required>
            </li>
            <li>
                <label for="txtTelefone">Telefone</label>
                <input type="tel" name="txtTelefone required">
            </li>
            <li>
                <label for="selEstado">Estado</label>
                <select name="aelEstado">
                    <option>-Selecione seu estado-</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="PR">Paraná</option>
                    <option value="SP">São Paulo</option>
                </select>
            </li>
            <li>
                <label for="upFoto">Foto</label>
                <input type="file" name="upFoto" id="upFoto">
            </li>
            <li>
                <input type="submit" value="Enviar">
            </li>
        </ul>
    </form>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>