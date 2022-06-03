<?php


require("connect.php");

//obtendo os valores dos campos
$id = $_POST['c_id'];
//armazenando a SQL que esta na variavel
$sql = "DELETE FROM `item` WHERE id = $id";

//executado a SQL que esta a variavel
$resultado = mysqli_query($conexao, $sql);


echo "CD excluido com sucesso";



?>
