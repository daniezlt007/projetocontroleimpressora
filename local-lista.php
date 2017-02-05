<?php
require_once("cabecalho.php");
require_once("bancoCategoria.php");
require_once("logicaUsuario.php");
?>
<form align="right" action="localForm.php">
    <button class="btn btn-primary" type="submit">Nova Unidade</button>
</form>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Descrição</th>
			<th>Sigla</th>
            <th colspan="2" style="text-align: center;">Manutenção</th>
		</tr>
	
	</thead>
    <?php
    verificaUsuario();
    $locais = listaCategorias($conexao);
        foreach ($locais as $local) :
    ?>
            <td><?= $local['desc_local'] ?></td>
            <td><?= $local['desc_sigla'] ?></td>
            
            <td align="center"><a class="btn btn-primary" href="local-altera.php?idlocal=<?= $local['idlocal'] ?>">alterar</a></td>
            <td align="center">
                <form action="removeLocal.php" method="post">
                    <input type="hidden" name="idlocal" value="<?= $local['idlocal'] ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>    
       <?php
    endforeach;
    ?>
</table>
<?php include("rodape.php"); ?>
