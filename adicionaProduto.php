	<?php 
	require_once("cabecalho.php");
	require_once("bancoProduto.php");
	require_once("logicaUsuario.php");	
	
	verificaUsuario();
	
	$nr_serie = $_POST['nr_serie'];
	$local_id = $_POST['local_id'];
	$host 	  = $_POST['host'];
	$marca_idmarca = $_POST['marca_idmarca'];
	$modelo_idmodelo = $_POST['modelo_idmodelo'];
			
		
	if (inserir($conexao, $nr_serie, $local_id, $host, $marca_idmarca, $modelo_idmodelo)) {
		?>
		<p class="text-success"> A Impressora de nº de série: <?= $nr_serie ?> , e do IP: <?= $host ?> foi adicionada!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		?>
		<p class="text-danger"> A impressora de nº de série: <?= $nr_serie ?> , e do IP: <?= $host ?> não foi adicionado! <?= $msg ?> </p>  
		<?php
	}
	?>
	<?php include("rodape.php") ?>
