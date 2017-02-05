<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostrarAlerta.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link href="css/loja.css" rel="stylesheet"/>
		<title>Página Inicial</title>
    </head>
	<body>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php"> Página Inicial</a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">

                            <!--<li><a href="produtoForm.php">Adiciona Produto</a></li>-->
                            <li><a href="produto-lista.php">Impressoras</a></li>
                            <li><a href="local-lista.php">Local</a></li>
                            <li><a href="marca-lista.php">Marca</a></li>
                            <li><a href="detalhe-lista.php">Detalhe</a></li>
                            <li><a href="#">Usuários</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            
                       </ul>

                    </div>

                </div>
            </div>



		<div class="container">
			<div class="principal">

                            <?php mostrarAlerta("sucess");?>
                            <?php mostrarAlerta("danger");?>