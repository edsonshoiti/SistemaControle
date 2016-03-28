<?php
			/*
				Template Name: html2wp-front-page
			*/ 
			
			?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php  wp_head();  ?>
</head>
<img align="left" src="<?php  bloginfo('template_url');  ?>/images/logo.png">
<title><?php  wp_title( '|', true, 'right' );  ?>
</title>
<link href="<?php  bloginfo('template_url');  ?>/css/bootstrap.min_.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://ajax.googleapis.com/%0D%0Aajax/libs/jquery/1.5/jquery.min.js"></script>
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
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/reset.css" type="text/css" media="screen">

<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/tab.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php  bloginfo('template_url');  ?>/tcal.css">
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/tcal.js"></script>
<link href="<?php  bloginfo('template_url');  ?>/tabs.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

var popupWindow=null;

function child_open()
{

popupWindow =window.open('printform.php',"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=950, height=400,top=200,left=200");

}
</script>

<body background="images/Rectangle66_0.jpg">
<h1 align="center"><font face="Arial" size="15" color="white">Controle de Estoque </font></h1>
<ol id="toc">
  <div class="btn-group">
    <li><a href="#inventory"><button type="button">Lista de produtos</button></a></li>
    <li><a href="#sales"><button type="button">Lista de Vendas</button></a></li>
    <li><a href="#alert"><button type="button">Lista de Clientes</button></a></li>
	<li><a href="#addproitem"><button type="button">Registrar Pedido</button></a></li>
    <li><a href="#addpro"><button type="button">Adicionar Produtos</button></a></li>
    <li><a href="#editprice"><button type="button">Adicionar Clientes</button></a></li>
	<li><a href="index.php"><button type="button">Sair</button></a></li>

</div>
<div class="content" id="inventory">
<table width="100%">
<tr class="head">
<th>Data</th>
<th>Nome do Produto</th>
<th>Descrição</th>
<th>Ordem de Registro</th>
<th>Preço</th>
<th>ID produto</th>
</tr>

<tr id="608" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">Civic</span>
</td>
<td>
<span class="text">Honda</span>
</td>
<td>
<span class="text">608</span>
</td>
<td>
<span class="text">2221</span>
</td>
<td>
<span class="text">2221</span>
</td>
<span id="last_608" class="text">

</span>




</tr>

<tr id="607" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">Corolla</span>
</td>
<td>
<span class="text">Toyota</span>
</td>
<td>
<span class="text">607</span>
</td>
<td>
<span class="text">993</span>
</td>
<td>
<span class="text">993</span>
</td>
<span id="last_607" class="text">

</span>




</tr>

<tr id="599" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">GOL-G3 </span>
</td>
<td>
<span class="text">MARCA-VOLKSWAGEM</span>
</td>
<td>
<span class="text">599</span>
</td>
<td>
<span class="text">0</span>
</td>
<td>
<span class="text">0</span>
</td>
<span id="last_599" class="text">

</span>




</tr>

<tr id="606" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">PAJERO</span>
</td>
<td>
<span class="text">MITSUBISHI</span>
</td>
<td>
<span class="text">606</span>
</td>
<td>
<span class="text">98</span>
</td>
<td>
<span class="text">98</span>
</td>
<span id="last_606" class="text">

</span>




</tr>

<tr id="604" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">AMAROK</span>
</td>
<td>
<span class="text">VOLKSWAGEM</span>
</td>
<td>
<span class="text">604</span>
</td>
<td>
<span class="text">55</span>
</td>
<td>
<span class="text">55</span>
</td>
<span id="last_604" class="text">

</span>




</tr>

<tr id="605" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">COROLLA</span>
</td>
<td>
<span class="text">TOYOTA</span>
</td>
<td>
<span class="text">605</span>
</td>
<td>
<span class="text">44444</span>
</td>
<td>
<span class="text">44444</span>
</td>
<span id="last_605" class="text">

</span>




</tr>


</table>
<br>
Total de Vendas
	    <b>Php 0.00</b><br><br>
<input name="" type="button" value="Imprimir" onclick="javascript:child_open()" style="cursor:pointer;">
</div>
<div class="content" id="alert">
	<ul>
		</ul>
<table width="100%">
<tr class="head">
<th>Data</th>
<th>Nome do cliente</th>
<th>E-mail</th>
<th>ID</th>
<th>Telefone</th>
</tr>

<tr id="14" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">MARCELO</span>
</td>
<td>
<span class="text">marcelo@uol.com.br</span>
</td>
<td>
 <span class="text">14</span>
</td>
<td>
 <span class="text">129922211</span>
</td>
   <td>
 <span class="text">14</span>
</td>


</tr>

<tr id="12" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">Edson</span>
</td>
<td>
<span class="text">edson-1@hotmail.com</span>
</td>
<td>
 <span class="text">12</span>
</td>
<td>
 <span class="text">0</span>
</td>
   <td>
 <span class="text">12</span>
</td>


</tr>

<tr id="13" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">Ricardo</span>
</td>
<td>
<span class="text">ricardo@uol.com.br</span>
</td>
<td>
 <span class="text">13</span>
</td>
<td>
 <span class="text">23232</span>
</td>
   <td>
 <span class="text">13</span>
</td>


</tr>


</table>
</div>
<div class="content" id="sales">
	<ul>
		</ul>
<table width="100%">
<tr class="head">
<th>Data</th>
<th>ID Produto</th>
<th>Quantidade</th>
<th>Estoque</th>
<th>ID Cliente</th>
</tr>

<tr id="19" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">606</span>
</td>
<td>
<span class="text">98</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_19" class="text"></span>
<input type="text" value="" class="editbox" id="first_input_19">
</td>



</tr>

<tr id="18" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">599</span>
</td>
<td>
<span class="text">98</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_18" class="text"></span>
<input type="text" value="" class="editbox" id="first_input_18">
</td>



</tr>

<tr id="17" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">32</span>
</td>
<td>
<span class="text">21</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_17" class="text">11</span>
<input type="text" value="11" class="editbox" id="first_input_17">
</td>



</tr>

<tr id="10" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">2211</span>
</td>
<td>
<span class="text">43</span>
</td>
<td>
<span class="text">33</span>
</td>



<td>
<span id="first_10" class="text">22</span>
<input type="text" value="22" class="editbox" id="first_input_10">
</td>



</tr>

<tr id="11" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">32</span>
</td>
<td>
<span class="text">32</span>
</td>
<td>
<span class="text">321</span>
</td>



<td>
<span id="first_11" class="text">222</span>
<input type="text" value="222" class="editbox" id="first_input_11">
</td>



</tr>

<tr id="12" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">98</span>
</td>
<td>
<span class="text">32</span>
</td>
<td>
<span class="text">43</span>
</td>



<td>
<span id="first_12" class="text">111</span>
<input type="text" value="111" class="editbox" id="first_input_12">
</td>



</tr>

<tr id="13" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">23</span>
</td>
<td>
<span class="text">99</span>
</td>
<td>
<span class="text">92</span>
</td>



<td>
<span id="first_13" class="text">222</span>
<input type="text" value="222" class="editbox" id="first_input_13">
</td>



</tr>

<tr id="14" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">33</span>
</td>
<td>
<span class="text">22</span>
</td>
<td>
<span class="text">22</span>
</td>



<td>
<span id="first_14" class="text">22</span>
<input type="text" value="22" class="editbox" id="first_input_14">
</td>



</tr>

<tr id="15" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">54</span>
</td>
<td>
<span class="text">0</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_15" class="text">89</span>
<input type="text" value="89" class="editbox" id="first_input_15">
</td>



</tr>

<tr id="16" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">12</span>
</td>
<td>
<span class="text">78</span>
</td>
<td>
<span class="text">22</span>
</td>



<td>
<span id="first_16" class="text">76</span>
<input type="text" value="76" class="editbox" id="first_input_16">
</td>



</tr>

<tr id="20" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">604</span>
</td>
<td>
<span class="text">0</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_20" class="text"></span>
<input type="text" value="" class="editbox" id="first_input_20">
</td>



</tr>

<tr id="21" bgcolor="#f2f2f2" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">605</span>
</td>
<td>
<span class="text">0</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_21" class="text"></span>
<input type="text" value="" class="editbox" id="first_input_21">
</td>



</tr>

<tr id="22" class="edit_tr">
<td class="edit_td">
<span class="text">2016-03-26</span>
</td>
<td>
<span class="text">21</span>
</td>
<td>
<span class="text">211</span>
</td>
<td>
<span class="text">0</span>
</td>



<td>
<span id="first_22" class="text">122</span>
<input type="text" value="122" class="editbox" id="first_input_22">
</td>



</tr>


</table>
</div>
<div class="content" id="addproitem">
<form action="updateproduct.php" method="post">
	<div style="margin-left: 20px;">
	ID do Produto<input name="product_id" type="text">
	</div>
	<br>
	<div style="margin-left: 30px;">
	Quantidade:<input name="qty" type="text">
	</div>
	<br>
	<div style="margin-left: 45px;">
	ID Cliente<input name="cliente_id" type="text">
	</div>
	<br>
	<div style="margin-left: 48px;">
	Product name:<select name="nome" id="user" class="textfield1"><br>
<b>Warning</b>:  mysql_fetch_assoc(): supplied argument is not a valid MySQL result resource in <b>C:\APM_Setup\htdocs\tableedit.php</b> on line <b>433</b><br>
</select>	</div>
	<br>
	<div style="margin-left: 110px; margin-top: 14px;"><input name="" type="submit" value="Adicionar"></div>
</form>
</div>
<div class="content" id="addpro">
<form action="saveproduct.php" method="post">
	<div style="margin-left: 20px;">
	Nome do Produto:<input name="produto" type="text">
	</div>
	<br>
	<div style="margin-left: 60px;">
	Descrição:<input name="descricao" type="text">
	</div>
	<br>
	<div style="margin-left: 80px;">
	Preço:<input name="preco" type="text">
	</div>
	<br>
	<div style="margin-left: 100px;">
	ID:<input name="idproduto" type="text">
	</div>
	<div style="margin-left: 127px; margin-top: 14px;"><input name="" type="submit" value="Adicionar"></div>
</form>
</div>
<div class="content" id="editprice">
<form action="updateprice.php" method="post">
	<div style="margin-left: 28px;">
	Nome do cliente:<input name="nome" type="text">
	</div>
	<br>
	<div style="margin-left: 90px;">
	Email:<input name="email" type="text">
	</div>
	<br>
	<div style="margin-left: 70px;">
	Telefone:<input name="telefone" type="text">
	</div>
	<br>
	<div style="margin-left: 110px;">
	ID:<input name="id" type="text">
	</div>
	<br>
	<div style="margin-left: 127px; margin-top: 14px;"><input name="" type="submit" value="Adicionar"></div>
</form>
</div>
<script src="<?php  bloginfo('template_url');  ?>/activatables.js" type="text/javascript"></script>
<script type="text/javascript">
activatables('page', ['inventory', 'alert', 'sales', 'addproitem', 'addpro', 'editprice']);
</script>
</ol>
<?php  wp_footer();  ?>
</body>
</html>
