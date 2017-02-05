<?php
        require_once("conecta.php");
		function listaModelo($conexao) {
		$modelos = array();
		$query = "select * from modelo";
		$rs = mysqli_query($conexao, $query);
		while ($modelo = mysqli_fetch_assoc($rs)) {
			array_push($modelos, $modelo);
		}
		return $modelos;
	}/*

	function inserir($conexao, $desc_modelo){
		$query = "insert into modelo (desc_marca) values "
				. "('{$desc_modelo}')";
				return mysqli_query($conexao, $query);
	}*/