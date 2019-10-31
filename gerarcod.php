<?php

	session_start();
	if (isset($_SESSION['login'])) {
		if ($_SESSION['login'] == 0) {
			header('Location:login.php');
		}
	}

?>
<center>
	<form method="POST">
		<input type="text" name="num" placeholder="Quantos Códigos..."><input type="submit" value="Gerar..."><br><a href="logout.php">Logout</a>
	</form>
</center>
<style>
	input {
		border: 1px solid black;
		width: 20%;
		height: 5%;
		padding-left: 5px;
		border-radius: 5px;
	}
</style>
<?php
	function gerar() {
		// gera um numero aleatorio de 5 digitos
		$num = rand(11111,99999);
		$soma = 0;
		for ($i=0; $i < strlen($num); $i++) { 
			$soma = $soma + str_split($num)[$i];
		}
		$soma = str_pad($soma, 2, "0", STR_PAD_LEFT);
		return $num.$soma.str_pad(($soma+$num), 6, "0", STR_PAD_LEFT);
	}
	if (isset($_POST['num'])) {
		$num = $_POST['num'];
		for ($i=0; $i < $num ; $i++) { 
			echo gerar()."<br>";
		}
	}
?>