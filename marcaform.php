<?php
require_once("cabecalho.php");
require_once("bancoMarca.php");
require_once("logicaUsuario.php");

verificaUsuario();
?>

<h1>Cadastro de Marcas</h1>
<form action="adicionaMarca.php" method="POST">
    <table class="table">	
        
        <?php include("marca-form-base.php");?>
        
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>    
</form>
<?php include ("rodape.php"); ?>
