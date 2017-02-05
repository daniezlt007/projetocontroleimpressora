<?php 
require_once("cabecalho.php");
require_once("bancoProduto.php");
require_once("logicaUsuario.php");	
	
	verificaUsuario(); 
?>

<?php
$id = $_POST['id'];
$nr_serie = $_POST['nr_serie'];
$local_id = $_POST['local_id'];
$host 	  = $_POST['host'];
$marca_idmarca = $_POST['marca_idmarca'];
$modelo_idmodelo = $_POST['modelo_idmodelo'];
	

    
    
if (alteraProduto($conexao, $id, $nr_serie, $local_id, $host, $marca_idmarca, $modelo_idmodelo)) {
    ?>
    <p class="text-success"> O Produto <?= $nr_serie ?> , <?= $host ?> foi alterado!</p>
<?php } else { 
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"> O Produto <?= $nr_serie ?> não foi alterado! <?= $msg?> </p>  
    <?php
}
?>
<?php include("rodape.php") ?>
