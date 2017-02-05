<?php
require_once("cabecalho.php");
require_once("bancoProduto.php");
require_once("logicaUsuario.php");
?>
<form align="right" action="produtoForm.php">
    <button class="btn btn-primary" type="submit">Nova Impressora</button>
</form>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>IP-Host</th>
			<th>Marca</th>
			<th>Modelo</th>
                        <th>Local</th>
            <th colspan="2" style="text-align: center;">Manutenção</th>
		</tr>
	
	</thead>
    <?php
    verificaUsuario();
    $produtos = listaProduto($conexao);
    foreach ($produtos as $produto) :
        ?>
         <td><?= $produto['host'] ?></td>
            <td><?= $produto['desc_marca'] ?></td>
            <td><?= $produto['desc_modelo'] ?></td>
            <td><?= $produto['desc_sigla'] ?> </td>
            <td align="center"><a class="btn btn-primary" href="produto-altera.php?id=<?= $produto['id'] ?>">alterar</a></td>
            <td align="center">
                <form action="removeProduto.php" method="post">
                    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>    
        <?php
    endforeach;
    ?>
</table>
<?php include("rodape.php"); ?>
