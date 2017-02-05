<?php 
require_once("cabecalho.php");
require_once("bancoImpressoraDetalhe.php");
require_once("logicaUsuario.php");	
	
	verificaUsuario(); 
?>

<?php
$id = $_POST['impressora_id'];
$qtde_porc = $_POST['qtde_porc'];
$data_troca = $_POST['data_troca'];
$data_proxima_troca = $_POST['data_proxima_troca'];
    
if (alteraDetalhe($conexao, $id, $qtde_porc, $data_troca, $data_proxima_troca)) {
    ?>
    <p class="text-success"> O Detalhe da impressora <?= $id ?>  foi alterada!</p>
<?php } else { 
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"> O Detalhe da impressora <?= $id ?> não foi alterado! <?= $msg?> </p>
    <?php
}
?>
<?php include("rodape.php") ?>
