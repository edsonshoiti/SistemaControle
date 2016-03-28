<?php

	session_start();
	

	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Sistema de Controle de Estoque</title>

        


        <link rel="stylesheet" href="styles.css" />

        

    </head>

    

<body>
<div style="margin:0 auto; width:300px; padding-left: 32px; margin-top:50px;">
	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
$remark=$_GET['id'];
if($remark=='success')
{
echo '<ul>';
echo '<li>'." Registration Success You can now login ".'</li>';
echo '</ul>';
}
?>
</div>


		<div id="formContainer">

			<form id="login" method="post" action="login.php">

				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>

				<input type="text" name="username" id="loginEmail" placeholder="Digite o seu Usuario..." />

				<input type="password" name="password" id="loginPass" placeholder="Digite a sua senha..." />

				<input type="submit" name="submit" value="Acessar" />

			</form>

			<form id="recover" method="post" action="register.php">

				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="adminpass" id="loginEmail" placeholder="Senha de Administrador" style="top: 138px;" />
				<input type="text" name="regusername" id="loginEmail" placeholder="Usuario" />
				<input type="password" name="regpassword" id="recoverEmail" placeholder="Senha" />

				<input type="submit" name="submit" value="Salvar" />

			</form>

		</div>




	<script src="jquery-1.7.1.min.js"></script>

		<script src="script.js"></script>


    

</body>

</html>



