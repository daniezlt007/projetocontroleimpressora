<?php
require_once("cabecalho.php");
require_once("bancoProduto.php");
require_once("logicaUsuario.php");

$id = $_POST['id'];
remover($conexao, $id);
$_SESSION["sucess"] = "Produto Removido com Sucesso!";
header("Location: produto-lista.php?");
die();
?>
