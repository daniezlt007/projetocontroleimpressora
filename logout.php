<?php
require_once("logicaUsuario.php");
logout();
$_SESSION["sucess"] = "Deslogado com Sucesso!";
header("Location: index.php");
die();