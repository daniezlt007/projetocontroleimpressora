<?php
require_once("conecta.php");
function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$email = mysqli_escape_string($conexao, $email);
	$query = "select * from usuario where email='{$email}' and senha='{$senhaMd5}'";
	$rs = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($rs);
	return $usuario;
}