<?php
require_once("cabecalho.php");
require_once("bancoImpressoraDetalhe.php");
require_once("logicaUsuario.php");

verificaUsuario();


$id = $_GET['impressora_id'];
$detalhe = buscaDetalhe($conexao, $id);

?>

<h1>Alteração de Produto</h1>
<form action="editaDetalhe.php" method="POST">
	
	<table class="table">	
        <input type="hidden" name="impressora_id" value="<?= $detalhe['impressora_id']; ?>" />
	
               <?php include("detalhe-form-base.php");?>
               
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
