<?php

    //importando o arquivo de conexão com BD
    require("connect.php");

    //obtendo os valores dos campos
    $album = $_POST['c_album'];
    $ano_lancamento = $_POST['c_ano_lancamento'];
    $quant_faixas = $_POST['c_Qfaixas'];
    $id = $_POST['c_id'];
    
    //armazenando a SQL que esta na variavel
    $sql = "INSERT INTO `item`(`album`,`ano_lancamento`,`quant_faixas`,`id`) VALUES ('  $album','  $ano_lancamento','   $quant_faixas','$id ')";

    //executado a SQL que esta a variavel
    $resultado = mysqli_query($conexao, $sql);

    //imprimindo a tela
    echo "CD inserido com sucesso";

?>
