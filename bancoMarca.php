<?php
        require_once("conecta.php");
		function listaMarca($conexao) {
		$marcas = array();
		$query = "select * from marca";
		$rs = mysqli_query($conexao, $query);
		while ($marca = mysqli_fetch_assoc($rs)) {
			array_push($marcas, $marca);
		}
		return $marcas;
	}

	function inserirMarca($conexao, $desc_marca){
		$query = "insert into marca (desc_marca) values "
				. "('{$desc_marca}')";
				return mysqli_query($conexao, $query);
	}

	function editaMarca($conexao, $idmarca, $desc_marca){
    $query = "update marca set desc_marca='{$desc_marca}' where idmarca={$idmarca}";
    return mysqli_query($conexao, $query);
	}

	function removeMarca($conexao, $idmarca){
	    $query = "delete from marca where idmarca={$idmarca}";
	    return mysqli_query($conexao, $query);
	}

	function buscaMarcaId($conexao, $idmarca){
	    $query = "select * from marca where idmarca={$idmarca}";
	    $rs = mysqli_query($conexao, $query);
	    return mysqli_fetch_assoc($rs);
	}