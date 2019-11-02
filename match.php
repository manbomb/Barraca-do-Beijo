<?php

	session_start();
	if (isset($_SESSION['login'])) {
		if ($_SESSION['login'] == 0) {
			header('Location:login.php');
		}
	}

?>
<html>
	<head>
		<title>MATCH! </title>
		<style type="text/css">
			a {
				text-decoration: none;
				color: #FF7777
			}
			* {
				font-family: comic sans ms;
			}
			td {
				padding: 10px;
				border: 1px solid black;
			}
		</style>
		<meta charset="utf-8">
		<script type="text/javascript">
			function print_div($id) {
				var conteudo = document.getElementById($id).innerHTML,
			    tela_impressao = window.open('about:blank');
				tela_impressao.document.write(conteudo);
				tela_impressao.window.print();
				tela_impressao.window.close();
			}
		</script>
	</head>
	<body>
		<center>
			<h1>MATCH!</h1>
			<form method="post" action="#">
				<input type="submit" name="input_btt" value="MATCH !" id="btt_input">
			</form>
			<a href="logout.php">Logout</a> ||  
			<a href="gerarcod.php">Gerar Cód. !</a>
			<?php

				function fat($n) {
					if ($n == 0) {
						return 1;
					} else {
						return $n*fat($n-1);
					}
				}

				function comb($n,$p) {
					if ($n >= $p) {
						$c = fat($n)/(fat($p)*fat($n-$p));
						return $c;
					} else {
						return 0;
					}
				}

				function match($a,$b) {
					$a = str_split($a);
					$b = str_split($b);

					if ($a[0] == $b[1] and $a[1] == $b[0]) {
						$d = 0;
						for ($i=2; $i < 10; $i++) { 
							$d = $d+pow($b[$i]-$a[$i],2);
						}
						//$d = sqrt($d)/sqrt(8)*100;
						//$d = 100-$d;
						return $d;
					} else {
						return 0;
					}
				}


				if (isset($_POST['input_btt'])) {
					$link = mysqli_connect('localhost', 'root', '', 'barraca-beijo');
					if (mysqli_connect_errno()) {
						echo "Ocorreu um erro na conexão...";
					}

					$result = mysqli_query($link, "SELECT * FROM `pessoas`");
					$num = mysqli_num_rows($result);

					//$total = comb($num, 2);
					//echo "<br><br> Serão feitos ".$total." combinações !!! <br><br>";

					echo "<br>";

					$i = 0;


					while ($fetch = mysqli_fetch_array($result)) {
						$p = ($i+1)/$num*100;
						$endereço[$i] = $fetch[0];
						$nome[$i] = $fetch[1];
						$tele[$i] = $fetch[2];
						$respostas[$i] = $fetch[3];
						//echo "<br>".($i+1)." - ".$fetch[1]." - ".$fetch[2]." - ".$p."% <br>";
						$i++;
					}

					echo "<br><div id=\"resultado_div\"><table id=\"resultado\">";

					for ($i=0; $i < count($respostas); $i++) { 
						for ($j=0; $j < count($respostas); $j++) { 
							if ($i != $j) {
								$r[$i][$j] = match($respostas[$i],$respostas[$j]);
								/*echo "<br>".$nome[$i]." e ".$nome[$j]." com ".$r[$i][$j]." pts";*/
							}
						}
						$max = max($r[$i]);
						$id = array_search($max, $r[$i]);
						echo "<tr><td>Nome: ".$nome[$i]."</td><td>Celular: ".$tele[$i]."</td><td>Parceiro(a): ".$nome[$id]."</td><td>Celular: ".$tele[$id]."</td></tr>";
					}

					echo "</table></div>";

					/*print_r($endereço);
					echo "<br>";
					print_r($respostas);*/
				}

			?>
			<input type="button" name="imprimir" value="Imprimir !" id="print" onclick="print_div('print');">
		</center>
	</body>
</html>