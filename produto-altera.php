<?php
require_once("cabecalho.php");
require_once("bancoCategoria.php");
require_once("bancoProduto.php");
require_once("bancoMarca.php");
require_once("bancoModelo.php");
require_once("logicaUsuario.php");

verificaUsuario();


$id = $_GET['id'];
$impressora = buscaProduto($conexao, $id);
$marcas = listaMarca($conexao);
$modelos = listaModelo($conexao);
$locais = listaCategorias($conexao);
?>

<h1>Alteração de Produto</h1>
<form action="editaProduto.php" method="POST">
	
	<table class="table">	
        <input type="hidden" name="id" value="<?= $impressora['id'] ?>" />
	
               <?php include("produto-form-base.php");?>
               
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
