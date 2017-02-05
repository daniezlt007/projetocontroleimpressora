<?php
require_once("cabecalho.php");
require_once("bancoMarca.php");
require_once("logicaUsuario.php");
?>
<form align="right" action="marcaform.php">
    <button class="btn btn-primary" type="submit">Nova Marca</button>
</form>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Descrição</th>
            <th colspan="2" style="text-align: center;">Manutenção</th>
		</tr>
	
	</thead>
    <?php
    verificaUsuario();
    $marcas = listaMarca($conexao);
        foreach ($marcas as $marca) :
    ?>
            <td><?= $marca['desc_marca'] ?></td>
            
            <td align="center"><a class="btn btn-primary" href="marca-altera.php?idmarca=<?= $marca['idmarca'] ?>">alterar</a></td>
            <td align="center">
                <form action="removeMarca.php" method="post">
                    <input type="hidden" name="idlocal" value="<?= $marca['idmarca'] ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>    
       <?php
    endforeach;
    ?>
</table>
<?php include("rodape.php"); ?>