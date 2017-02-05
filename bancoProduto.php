<?php
//phpinfo();
require_once("conecta.php");

function listaProduto($conexao) {
    $impressoras = array();
    $rs = mysqli_query($conexao, "select i.id,i.host,m.desc_marca,mm.desc_modelo,l.desc_sigla from impressora i join marca m on (m.idmarca=i.marca_idmarca) join modelo mm on (mm.idmodelo=i.modelo_idmodelo) join local l on (l.idlocal=i.local_id)");
    while ($impressora = mysqli_fetch_assoc($rs)) {
        array_push($impressoras, $impressora);
    }
    return $impressoras;
}

function inserir($conexao, $nr_serie, $local_id, $host, $marca_idmarca, $modelo_idmodelo) {
    $query = "insert into impressora (nr_serie, local_id, host, marca_idmarca, modelo_idmodelo) values "
            . "('{$nr_serie}', {$local_id}, '{$host}', {$marca_idmarca}, {$modelo_idmodelo})";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nr_serie, $local_id, $host, $marca_idmarca, $modelo_idmodelo) {
    $query = "update impressora set nr_serie='{$nr_serie}', local_id={$local_id}, host='{$host}', marca_idmarca={$marca_idmarca}, modelo_idmodelo={$modelo_idmodelo} where id={$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from impressora where id = {$id}";
    $rs = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($rs);
}

function remover($conexao, $id) {
    $query = "delete from impressora where id= {$id}";
    return mysqli_query($conexao, $query);
}

