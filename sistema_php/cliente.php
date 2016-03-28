<?php
include("db.php");
$proname=$_POST['nome'];
$descricao=$_POST['email'];
$idproduto=$_POST['telefone'];
mysql_query("INSERT INTO clientes (nome, email, telefone) VALUES ('$nome','$email', '$telefone')");
header("location: tableedit.php#page=addpro");
?>
