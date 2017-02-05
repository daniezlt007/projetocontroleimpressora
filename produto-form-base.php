<tr>
    <td>Nº de Série*:</td> 
    <td><input class="form-control" type="text" name="nr_serie" value="<?= $impressora['nr_serie'] ?>" required></td>
</tr>
<tr>
    <td>Local:</td>
    <td>
        <select name="local_id" class="form-control">
        <option value="0">Selecione um Local</option>
        <?php
            foreach ($locais as $local) :
                $esta = $impressora['local_id'] == $local['idlocal'];
                $selecao = $esta ? "selected='selected'" : "";
                ?>
                <option value="<?= $local['idlocal'] ?>" <?= $selecao ?>>
                <?= $local['desc_sigla'] ?>
                </option>
        <?php endforeach; ?>
        </select>
    </td>
</tr>
<tr>
    <td>Ip Host*:</td> 
    <td><input class="form-control" type="text" name="host" value="<?= $impressora['host'] ?>" required></td>
</tr>
<tr>
    <td>Marca*:</td>
    <td>
        <select name="marca_idmarca" class="form-control">
            <option value="0">Selecione a Marca</option>
        <?php
            foreach ($marcas as $marca) :
                $esta = $impressora['marca_idmarca'] == $marca['idmarca'];
                $selecao = $esta ? "selected='selected'" : "";
                ?>
                <option value="<?= $marca['idmarca'] ?>" <?= $selecao ?>>
                <?= $marca['desc_marca'] ?>
                </option>
        <?php endforeach; ?>
        </select>
    </td>
</tr>
<tr>
    <td>Modelo:</td>
    <td>
        <select name="modelo_idmodelo" class="form-control">
            <option value="0">Selecione o Modelo</option>
        <?php
            foreach ($modelos as $modelo) :
                $esta = $impressora['modelo_idmodelo'] == $modelo['idmodelo'];
                $selecao = $esta ? "selected='selected'" : "";
                ?>
                <option value="<?= $modelo['idmodelo'] ?>" <?= $selecao ?>>
                <?= $modelo['desc_modelo'] ?>
                </option>
        <?php endforeach; ?>
        </select>
    </td>
</tr>