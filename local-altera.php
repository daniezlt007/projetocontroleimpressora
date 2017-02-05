<?php
require_once("cabecalho.php");
require_once("bancoCategoria.php");
require_once("logicaUsuario.php");

verificaUsuario();


$idlocal = $_GET['idlocal'];
$local = buscaLocalId($conexao, $idlocal);

?>

<h1>Alteração de Local</h1>
<form action="editaLocal.php" method="POST">
	
	<table class="table">	
        <input type="hidden" name="idlocal" value="<?= $local['idlocal'] ?>" />
	
               <?php include("local-form-base.php");?>
               
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
