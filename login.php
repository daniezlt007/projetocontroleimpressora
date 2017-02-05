<?php
require_once("bancoUsuario.php");
require_once("logicaUsuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == null) {
    $_SESSION["danger"] = "Usuário ou Senha Inválida!";
    header("Location: index.php");
} else {
    $_SESSION["sucess"] = "Usuário logado com Sucesso!";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();
?>