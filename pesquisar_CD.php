

<?php


require("connect.php");

//obtendo os valores dos campos
$ano = $_POST['c_ano'];

$sql = "SELECT `ano_lancamento` FROM `item` WHERE ano_lancamento = '$ano'";	
    
//executando a SQL que esta na variavel
$resultado = mysqli_query($conexao, $sql);

//Retornando a quantidade de registros encontrados
$quantidade = mysqli_num_rows($resultado);

//Retornando o número de registros encontrados
echo "Existem ".$quantidade."  de Anos de lancamento cadastrado(s) com esse ano" .$ano

?>