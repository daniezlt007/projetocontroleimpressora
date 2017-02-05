<?php
require_once("cabecalho.php");
require_once("bancoImpressoraDetalhe.php");
require_once("bancoProduto.php");
require_once("logicaUsuario.php");

verificaUsuario();
$detalhes = listaImpressora($conexao);
$impressoras = listaProduto($conexao);
?>

<h1>Cadastro de Impressoras</h1>
<form action="adicionaProduto.php" method="POST">
    <table class="table">	
        <tr>
            <td>Impressora:</td>
            <td>
                <select name="local_id" class="form-control">
                <option value="0">Selecione uma Impressora</option>
                <?php
                    foreach ($detalhes as $detalhe) :
                        $esta = $detalhe['impressora_id'] == $impressora['id'];
                        $selecao = $esta ? "selected='selected'" : "";
                        ?>
                        <option value="<?= $detalhe['impressora_id'] ?>" <?= $selecao ?>>
                        <?= print $detalhe['nr_serie'] ?>
                        </option>
                <?php endforeach; ?>
                </select>
            </td>
        </tr>
            <?php include("detalhe-form-base.php");?>
        
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
