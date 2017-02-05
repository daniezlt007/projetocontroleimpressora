	<?php 
	require_once("cabecalho.php");
	require_once("bancoCategoria.php");
	require_once("logicaUsuario.php");	
	
	verificaUsuario();
	
	$idlocal = $_POST['idlocal'];	
	$desc_local = $_POST['desc_local'];
	$desc_sigla = $_POST['desc_sigla'];
			
	if (editaLocal($conexao, $idlocal, $desc_local, $desc_sigla)) {
		?>
		<p class="text-success"> Unidade: <?= $desc_sigla ?> foi Editado com Sucesso!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		?>
		<p class="text-danger"> Unidade: <?= $desc_sigla ?> não foi Editado! <?= $msg ?> </p>  
		<?php
	}
	?>
	<?php include("rodape.php") ?>
