<?php

include_once("conexao.php");
$nome = $_POST['nome'];
$nomeempresa = $_POST['nomeempresa'];
$descricao = $_POST['descricao'];
$telefone = $_POST['telefone'];
$bairro = $_POST['bairro'];
$locais = $_POST['locais'];

$sql = "insert into empresas (nome,nomeempresa,descricao,telefone,bairro,locais) values ('$nome','$nomeempresa','$descricao','$telefone','$bairro','$locais')";
$salvar = mysqli_query($conexao,$sql);
mysql_close($conexao);

?>