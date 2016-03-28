<?php
include("db.php");
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
mysql_query("INSERT INTO clientes (nome, email, telefone) VALUES ('$nome','$email', '$telefone')");
header("location: tableedit.php#page=editprice");
?>
