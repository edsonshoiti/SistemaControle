<?php
	require_once('auth.php');
?>
<?php
include('db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<img align="left" src="images/logo.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema de controle de estoque</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".edit_tr").click(function()
{
var ID=$(this).attr('id');
$("#first_"+ID).show();
$("#last_"+ID).hide();
$("#last_input_"+ID).show();
}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var last=$("#last_input_"+ID).val();
var dataString = 'id='+ ID +'&price='+first+'&qty_sold='+last;
$("#first_"+ID).html('<img src="load.gif" />');


if(first.length && last.length>0)
{
$.ajax({
type: "POST",
url: "table_edit_ajax.php",
data: dataString,
cache: false,
success: function(html)
{

$("#first_"+ID).html(first);
$("#last_"+ID).html(last);
}
});
}
else
{
alert('Enter something.');
}

});

$(".editbox").mouseup(function() 
{
return false
});

$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>
<style>
body
{
background-image: url("images/Rectangle66_0.png");
background-position: 720px 100px;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
padding:10px;
}
.editbox
{
display:none
}
td
{
padding:6px;
border-left:1px solid #fff;
border-bottom:1px solid #fff;
}
table{
border-right:1px solid #fff;
}
.editbox
{
font-size:14px;
width:29px;
background-color:#fff;

border:solid 1px #000;
padding:0 4px;
}
.edit_tr:hover
{
background:url(edit.png) right no-repeat #80C8E5;
cursor:pointer;
}
.edit_tr
{
background: none repeat scroll 0 0 #00000;
}
th
{
font-weight:bold;
text-align:left;
padding:9px;
border:1px solid #fff;
border-right-width: 0px;
}
.head
{
background: none repeat scroll 0 0 #DCDCDCD;
color:#00000;

}

</style>
<link rel="stylesheet" href="reset.css" type="text/css" media="screen" />

<link rel="stylesheet" href="tab.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<link href="tabs.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

var popupWindow=null;

function child_open()
{ 

popupWindow =window.open('printform.php',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=950, height=400,top=200,left=200");

}
</script>
</head>
<body background ="images/Rectangle66_0.jpg">
<h1 ALIGN= "center"><FONT FACE="Arial" SIZE="15" COLOR="white">Controle de Estoque </FONT></h1>
<ol id="toc">
  <div class="btn-group">
    <li><a href="#inventory"><button type="button" >Lista de produtos</button></a></li>
    <li><a href="#sales"><button type="button" >Lista de Vendas</button></a></li>
    <li><a href="#alert"><button type="button" >Lista de Clientes</button></a></li>
	<li><a href="#addproitem"><button type="button" >Registrar Pedido</button></a></li>
    <li><a href="#addpro"><button type="button" >Adicionar Produtos</button></a></li>
    <li><a href="#editprice"><button type="button" >Adicionar Clientes</button></a></li>
	<li><a href="index.php"><button type="button" >Sair</button></a></li>
</ol>
</div>
<div class="content" id="inventory">
<table width="100%"">
<tr class="head">
<th>Data</th>
<th>Nome do Produto</th>
<th>Descrição</th>
<th>Ordem de Registro</th>
<th>Preço</th>
<th>ID produto</th>
</tr>

<?php
$da=date("Y-m-d");

$sql=mysql_query("select * from inventory");
$i=1;
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$date=$row['date'];
$item=$row['produto'];
$qtyleft=$row['descricao'];
$qty_sold=$row['id'];
$price=$row['preco'];
$sales=$row['idproduto'];

if($i%2)
{
?>
<tr id="<?php echo $id; ?>" class="edit_tr">
<?php } else { ?>
<tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="edit_tr">
<?php } ?>
<td class="edit_td">
<span class="text"><?php echo $da; ?></span> 
</td>
<td>
<span class="text"><?php echo $item; ?></span> 
</td>
<td>
<span class="text"><?php echo $qtyleft; ?></span>
</td>
<td>
<span class="text"><?php echo $qty_sold; ?></span>
</td>
<td>
<span class="text"><?php echo $price; ?></span>
</td>
<td>
<span class="text"><?php echo $price; ?></span>
</td>
<span id="last_<?php echo $id; ?>" class="text">

</span>
</td>

</span>
</td>
</tr>

<?php
$i++;
}
?>

</table>
<br />
Total de Vendas
	    <b>Php <?php
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}
$result1 = mysql_query("SELECT sum(sales) FROM sales where date='$da'");
while($row = mysql_fetch_array($result1))
{
    $rrr=$row['sum(sales)'];
	echo formatMoney($rrr, true);
 }

?></b><br /><br />
<input name="" type="button" value="Imprimir" onclick="javascript:child_open()" style="cursor:pointer;" />
</div>
<div class="content" id="alert">
	<ul>
	<?php
	$CRITICAL=10;
	$sql2=mysql_query("select * from inventory where qtyleft<='$CRITICAL'");

	?>
	</ul>
<table width="100%">
<tr class="head">
<th>Data</th>
<th>Nome do cliente</th>
<th>E-mail</th>
<th>ID</th>
<th>Telefone</th>
</tr>

<?php
$da=date("Y-m-d");

$sql=mysql_query("select * from clientes");
$i=1;
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$date=$row['date'];
$item=$row['nome'];
$qtyleft=$row['email'];
$qty_sold=$row['id'];
$price=$row['telefone'];
$sales=$row['id'];

if($i%2)
{
?>
<tr id="<?php echo $id; ?>" class="edit_tr">
<?php } else { ?>
<tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="edit_tr">
<?php } ?>
<td class="edit_td">
<span class="text"><?php echo $da; ?></span>
</td>
<td>
<span class="text"><?php echo $item; ?></span>
</td>
<td>
<span class="text"><?php echo $qtyleft; ?></span>
</td>
<td>
 <span class="text"><?php echo $qty_sold; ?></span>
</td>
<td>
 <span class="text"><?php echo $price; ?></span>
</td>
   <td>
 <span class="text"><?php echo $sales; ?></span>
</td>
<?php
$sqls=mysql_query("select * from sales where date='$da' and product_id='$id'");
while($rows=mysql_fetch_array($sqls))
{
$rtyrty=$rows['qty'];
$rrrrr=$rtyrty*$price;
echo $rrrrr;
}

?>
</span>
</td>
</tr>

<?php
$i++;
}
?>

</table>
</div>
<div class="content" id="sales">
	<ul>
	<?php
	$CRITICAL=10;
	$sql2=mysql_query("select * from sales where qtyleft<='$CRITICAL'");

	?>
	</ul>
<table width="100%">
<tr class="head">
<th>Data</th>
<th>ID Produto</th>
<th>Quantidade</th>
<th>Estoque</th>
<th>ID Cliente</th>
</tr>

<?php
$da=date("Y-m-d");

$sql=mysql_query("select * from sales");
$i=1;
while($row=mysql_fetch_array($sql))
{
$id=$row['id'];
$date=$row['date'];
$item=$row['product_id'];
$qtyleft=$row['qty'];
$qty_sold=$row['sales'];
$price=$row['cliente_ID'];
$sales=$row['qty'];

if($i%2)
{
?>
<tr id="<?php echo $id; ?>" class="edit_tr">
<?php } else { ?>
<tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="edit_tr">
<?php } ?>
<td class="edit_td">
<span class="text"><?php echo $da; ?></span>
</td>
<td>
<span class="text"><?php echo $item; ?></span>
</td>
<td>
<span class="text"><?php echo $qtyleft; ?></span>
</td>
<td>
<span class="text"><?php echo $qty_sold; ?></span>
</td>

<?php
$sqls=mysql_query("select * from sales where date='$da' and product_id='$id'");
while($rows=mysql_fetch_array($sqls))
{
echo $rows['qty'];
}
?>
</span>
</td>
<td>
<span id="first_<?php echo $id; ?>" class="text"><?php echo $price; ?></span>
<input type="text" value="<?php echo $price; ?>" class="editbox" id="first_input_<?php echo $id; ?>" />
</td>

<?php
$sqls=mysql_query("select * from sales where date='$da' and product_id='$id'");
while($rows=mysql_fetch_array($sqls))
{
$rtyrty=$rows['qty'];
$rrrrr=$rtyrty*$price;
echo $rrrrr;
}

?>
</span>
</td>
</tr>

<?php
$i++;
}
?>

</table>
</div>
<div class="content" id="addproitem">
<form action="updateproduct.php" method="post">
	<div style="margin-left: 20px;">
	ID do Produto<input name="product_id" type="text" />
	</div>
	<br />
	<div style="margin-left: 30px;">
	Quantidade:<input name="qty" type="text" />
	</div>
	<br />
	<div style="margin-left: 45px;">
	ID Cliente<input name="cliente_id" type="text" />
	</div>
	<br />
	<div style="margin-left: 48px;">
	Product name:<?php
	$nome= mysql_query("select * from cliente");

	echo '<select name="nome" id="user" class="textfield1">';
	 while($res= mysql_fetch_assoc($nome))
	{
	echo '<option value="'.$res['id'].'">';
	echo $res['nome'];
	echo'</option>';
	}
	echo'</select>';
	?>
	</div>
	<br />
	<div style="margin-left: 110px; margin-top: 14px;"><input name="" type="submit" value="Adicionar" /></div>
</form>
</div>
<div class="content" id="addpro">
<form action="saveproduct.php" method="post">
	<div style="margin-left: 20px;">
	Nome do Produto:<input name="produto" type="text" />
	</div>
	<br />
	<div style="margin-left: 60px;">
	Descrição:<input name="descricao" type="text" />
	</div>
	<br />
	<div style="margin-left: 80px;">
	Preço:<input name="preco" type="text" />
	</div>
	<br />
	<div style="margin-left: 100px;">
	ID:<input name="idproduto" type="text" />
	</div>
	<div style="margin-left: 127px; margin-top: 14px;"><input name="" type="submit" value="Adicionar" /></div>
</form>
</div>
<div class="content" id="editprice">
<form action="updateprice.php" method="post">
	<div style="margin-left: 28px;">
	Nome do cliente:<input name="nome" type="text" />
	</div>
	<br />
	<div style="margin-left: 90px;">
	Email:<input name="email" type="text" />
	</div>
	<br />
	<div style="margin-left: 70px;">
	Telefone:<input name="telefone" type="text" />
	</div>
	<br />
	<div style="margin-left: 110px;">
	ID:<input name="id" type="text" />
	</div>
	<br />
	<div style="margin-left: 127px; margin-top: 14px;"><input name="" type="submit" value="Adicionar" /></div>
</form>
</div>
<script src="activatables.js" type="text/javascript"></script>
<script type="text/javascript">
activatables('page', ['inventory', 'alert', 'sales', 'addproitem', 'addpro', 'editprice']);
</script>
</body>
</html>
