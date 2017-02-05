<?php
require_once("conecta.php");
function inserirLocal($conexao, $desc_local, $desc_sigla){
		$query = "insert into local (desc_local, desc_sigla) values "
				. "('{$desc_local}', '{$desc_sigla}')";
				return mysqli_query($conexao, $query);
}

function listaCategorias($conexao){
    $locais = array();
    $query ="select * from local";
    $rs = mysqli_query($conexao, $query);
    while($local = mysqli_fetch_assoc($rs)){
        array_push($locais, $local);
    }
    return $locais;
}

function editaLocal($conexao, $idlocal, $desc_local, $desc_sigla){
    $query = "update local set desc_local='{$desc_local}', desc_sigla='{$desc_sigla}' where idlocal={$idlocal}";
    return mysqli_query($conexao, $query);
}

function removeLocal($conexao, $idlocal){
    $query = "delete from local where id={$idlocal}";
    return mysqli_query($conexao, $query);
}

function buscaLocalId($conexao, $idlocal){
    $query = "select * from local where idlocal = {$idlocal}";
    $rs = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($rs);
}