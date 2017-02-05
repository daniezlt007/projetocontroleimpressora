<?php
require_once("cabecalho.php");
require_once("bancoImpressoraDetalhe.php");
require_once("logicaUsuario.php");
$id = $_GET['id'];
?>

<form align="right" action="detalheForm.php">
    <button class="btn btn-primary" type="submit">Nova Impressora</button>
</form>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Usuário</th>
			<th>Marca</th>
			<th>Modelo</th>
                        <th>Nr. Série</th>
                        <th>Quantidade (%)</th>
                        <th>Data Trocada</th>
                        <th>Data Próxima Troca</th>
            <th colspan="2" style="text-align: center;">Manutenção</th>
		</tr>
	
	</thead>
    <?php
    verificaUsuario();
    $detalhes = listaImpressora($conexao);
    foreach ($detalhes as $detalhe) :
        ?>
        
         <td><?= $detalhe['nome'] ?></td>
            <td><?= $detalhe['desc_marca']; ?></td>
            <td><?= $detalhe['desc_modelo']; ?></td>
            <td><?= $detalhe['nr_serie']; ?></td>
            <td><?= $detalhe['qtde_porc']; ?> </td>
            <td><?= $detalhe['data_troca']; ?> </td>
            <td><?= $detalhe['data_proxima_troca']; ?> </td>
            <td align="center"><a class="btn btn-primary" href="detalhe-altera.php?impressora_id=<?= $detalhe['impressora_id']?>">alterar</a></td>
            <td align="center">
                <form action="removeProduto.php" method="post">
                    <input type="hidden" name="id" value="">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>    
        <?php
    endforeach;
    ?>
</table>
<?php include("rodape.php"); ?>
