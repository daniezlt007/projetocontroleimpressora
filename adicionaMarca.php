	<?php 
	require_once("cabecalho.php");
	require_once("bancoMarca.php");
	require_once("logicaUsuario.php");	
	
	verificaUsuario();
	
	$desc_marca = $_POST['desc_marca'];
				
	if (inserirMarca($conexao, $desc_marca)) {
		?>
		<p class="text-success"> A marca: <?= $desc_marca ?> foi adicionada!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		?>
		<p class="text-danger"> A marca: <?= $desc_marca ?> não foi adicionado! <?= $msg ?> </p>  
		<?php
	}
	?>
	<?php include("rodape.php") ?>
