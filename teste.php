<?php

	$link = mysqli_connect("localhost", "root", "", "barraca-beijo");

	function existe($link, $cod) {
		if (mysqli_connect_errno()) {
			echo "Ocorreu um erro na conexão...";
		}

		$result = mysqli_query($link, "SELECT * FROM `cods` WHERE `cod` LIKE '".$cod."'");

		$num = mysqli_num_rows($result);

		return $num;
	}

	if (existe($link, "336601803360") == 0) {
		echo "0";
	} else {
		echo "=! 0";
	}
?>