<?php
require_once("cabecalho.php");
require_once("bancoCategoria.php");
require_once("bancoProduto.php");
require_once("bancoMarca.php");
require_once("bancoModelo.php");
require_once("logicaUsuario.php");

verificaUsuario();

$locais = listaCategorias($conexao);
$marcas = listaMarca($conexao);
$modelos = listaModelo($conexao);
?>

<h1>Cadastro de Impressoras</h1>
<form action="adicionaProduto.php" method="POST">
    <table class="table">	
        
        <?php include("produto-form-base.php");?>
        
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
