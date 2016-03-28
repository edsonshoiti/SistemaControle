<HTML>
<HEAD>
 <TITLE>Documento PHP</TITLE>
<?php
 //Start session
	session_start();

?>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Sistema de Controle de Esttoque</title>



        <!-- Our CSS stylesheet file -->

        <link rel="css/bootstrap-theme" href="bootstrap-theme" />



        <!--[if lt IE 9]>

          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <![endif]-->

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

			<form id="recover" method="post" action="register.php">
				<input type="text" name="adminpass" id="loginEmail" placeholder="Admin Password" style="top: 138px;" />
				<input type="text" name="regusername" id="loginEmail" placeholder="Username" />
				<input type="password" name="regpassword" id="recoverEmail" placeholder="Password" />

				<input type="submit" name="submit" value="Save" />

			</form>

		</div>



    <!-- JavaScript includes -->
   <script src="js/bootstrap.min.js"></script>


		<script src="js/bootstrap.js"></script>




</body>

</html>


