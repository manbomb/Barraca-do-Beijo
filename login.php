<?php

	session_start();
	if (isset($_SESSION['login'])) {
		if ($_SESSION['login'] == 1) {
			header('Location:gerarcod.php');
		}
	}

?>
<center>
	<form method="post" action="#">
		<div id="login">
			<input type="password" name="pass" placeholder="Senha...">
			<br>
			<input type="submit" value="Entrar">
		</div>
	</form>
	<style>
		input {
			border: 1px solid black;
			width: 15%;
			height: 5%;
			padding-left: 5px;
			border-radius: 5px;
		}
		#login {
			margin-top: 15%;
		}
	</style>
	<?php

		if (isset($_POST['pass'])) {
			if ($_POST['pass'] == "admin123") {
				$_SESSION['login'] = 1;
				header('Location:gerarcod.php');
			} else {
				echo "Login errado...";
			}
		}

	?>
</center>