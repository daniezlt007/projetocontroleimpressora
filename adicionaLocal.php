	<?php 
	require_once("cabecalho.php");
	require_once("bancoCategoria.php");
	require_once("logicaUsuario.php");	
	
	verificaUsuario();
	
	$desc_local = $_POST['desc_local'];
	$desc_sigla = $_POST['desc_sigla'];
			
	if (inserirLocal($conexao, $desc_local, $desc_sigla)) {
		?>
		<p class="text-success"> O Local de Sigla: <?= $desc_sigla ?> foi adicionada!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		?>
		<p class="text-danger"> O Local de Sigla: <?= $desc_sigla ?> não foi adicionado! <?= $msg ?> </p>  
		<?php
	}
	?>
	<?php include("rodape.php") ?>
