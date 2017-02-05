<?php
require_once("cabecalho.php");
require_once("bancoMarca.php");
require_once("logicaUsuario.php");

verificaUsuario();


$idmarca = $_GET['idmarca'];
$marca = buscaMarcaId($conexao, $idmarca);

?>

<h1>Alteração de Marca</h1>
<form action="editaMarca.php" method="POST">
	
	<table class="table">	
        <input type="hidden" name="idmarca" value="<?= $marca['idmarca'] ?>" />
	
               <?php include("marca-form-base.php");?>
               
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
