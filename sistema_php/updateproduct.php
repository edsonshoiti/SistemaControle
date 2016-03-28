<?php
include("db.php");
$product_id=$_POST['product_id'];
$qty=$_POST['qty'];
$cliente_id=$_POST['cliente_id'];
mysql_query("INSERT INTO sales (product_id, qty, cliente_id) VALUES ('$product_id','$qty','$cliente_id')");
header("location: tableedit.php#page=addproitem");
?>
