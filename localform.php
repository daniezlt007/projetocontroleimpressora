<?php
require_once("cabecalho.php");
require_once("bancoCategoria.php");
require_once("logicaUsuario.php");

verificaUsuario();
?>

<h1>Cadastro de Unidades</h1>
<form action="adicionaLocal.php" method="POST">
    <table class="table">	
        
        <?php include("local-form-base.php");?>
        
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
