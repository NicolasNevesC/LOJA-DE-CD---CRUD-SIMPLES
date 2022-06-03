<?php   
    //Importando o arquivo de conexão com o BD(connect)//
	require("connect.php");
 
    //Obtendo os valores dos campos//
	$album_antigo = $_POST['c_album_antigo'];
    $album_novo = $_POST['c_album_novo'];
  
    //Salvando a SQL em uma variavel
    $sql = "UPDATE `item` SET `album`='$album_novo' WHERE `album` = '$album_antigo'";	
    
    //executando a SQL que esta na variavel
    $resultado = mysqli_query($conexao, $sql);
     
    echo "CD alterado com sucesso";      
?>
<p><a href="index.html">Voltar</a>



 