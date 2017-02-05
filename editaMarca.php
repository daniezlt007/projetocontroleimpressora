	<?php 
	require_once("cabecalho.php");
	require_once("bancoMarca.php");
	require_once("logicaUsuario.php");	
	
	verificaUsuario();
	
	$idmarca = $_POST['idmarca'];	
	$desc_marca = $_POST['desc_marca'];
			
	if (editamarca($conexao, $idmarca, $desc_marca)) {
		?>
		<p class="text-success"> Marca: <?= $desc_marca ?> foi Editado com Sucesso!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		?>
		<p class="text-danger"> Marca: <?= $desc_marca ?> não foi Editado! <?= $msg ?> </p>  
		<?php
	}
	?>
	<?php include("rodape.php") ?>
