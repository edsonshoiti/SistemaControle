<?php
include("db.php");
$produto=$_POST['produto'];
$descricao=$_POST['descricao'];
$preco=$_POST['preco'];
$idproduto=$_POST['idproduto'];
mysql_query("INSERT INTO inventory (produto, descricao, preco, idproduto) VALUES ('$produto','$descricao', '$preco','$idproduto')");
header("location: tableedit.php#page=addpro");
?>
