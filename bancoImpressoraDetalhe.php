<?php
//phpinfo();
require_once("conecta.php");
    function listaImpressora($conexao) {
	$detalhes = array();
	/*$rs = mysqli_query($conexao, "select UPPER(u.nome) as nome,id.impressora_id,
                id.qtde_porc,id.data_troca,
                id.data_proxima_troca,m.desc_marca,mm.desc_modelo from 
                impressora_detalhe id join usuario u on 
                (id.usuario_id=u.idusuario) join impressora i on 
                (id.impressora_id=i.id) join marca m on 
                (m.idmarca=i.marca_idmarca) join modelo mm on 
                (mm.idmodelo=i.modelo_idmodelo)");*/
       $rs = mysqli_query($conexao, "select UPPER(u.nome) as nome,id.impressora_id,
                id.qtde_porc,id.data_troca,i.nr_serie,
                id.data_proxima_troca,m.desc_marca,mm.desc_modelo from 
                impressora i join impressora_detalhe id on 
                (id.impressora_id=i.id) join usuario u on 
                (id.usuario_id=u.idusuario) join marca m on 
                (m.idmarca=i.marca_idmarca) join modelo mm on 
                (mm.idmodelo=i.modelo_idmodelo)"); 
        
    while ($detalhe = mysqli_fetch_assoc($rs)) {
                array_push($detalhes, $detalhe);
    }
    return $detalhes;
}
function buscaDetalhe($conexao, $id) {
    $query = "select * from impressora_detalhe where impressora_id = {$id}";
    $rs = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($rs);
}
function alteraDetalhe($conexao, $id, $qtde_porc,$data_troca,$data_proxima_troca){
    $query = "update impressora_detalhe set qtde_porc={$qtde_porc}, data_troca='{$data_troca}',data_proxima_troca='{$data_proxima_troca}' where impressora_id={$id}";
    return mysqli_query($conexao, $query);
}
function insereDetalhe($conexao, $usuario_id, $id, $qtde_porc,$data_troca,$data_proxima_troca){
    $query = "insert into impressora_detalhe (usuario_id, impressora_id, qtde_porc, data_troca, data_proxima_troca)"
            . "values ({$usuario_id},{$id},'{$qtde_porc}','{$data_troca}','{$data_proxima_troca}') ";
    return mysqli_query($conexao, $query);
}

/*
function listaProduto($conexao) {
    $impressoras = array();
    $rs = mysqli_query($conexao, "select i.id,i.host,m.desc_marca,mm.desc_modelo,l.desc_sigla from impressora i join marca m on (m.idmarca=i.marca_idmarca) join modelo mm on (mm.idmodelo=i.modelo_idmodelo) join local l on (l.idlocal=i.local_id)");
    while ($impressora = mysqli_fetch_assoc($rs)) {
        array_push($impressoras, $impressora);
    }
    return $impressoras;
}*/