<html>
	<head>
		<title>Barraca do Beijo - Perguntas</title>
		<meta charset="utf-8">
		<style>
			body {
				background-image: url('beijo.png');
				background-size: 80% 100%;
				background-position: center;
				background-repeat: no-repeat;
			}
			* {
				font-family: comic sans ms;
				border-radius: 5px;
				outline:0;
			}
			.div_perg {
				width: 40%;
				height: 40%;
				border: 1px solid black;
				margin-top: 8%;
				padding: 10%;
				padding-top: 2%;
				display: none;
				background-color: rgba(255,255,255,0.5);
			}
			input[type=text] {
				border: 1px solid black;
				padding: 5px;
				margin: 5px;
				width: 50%;
			}
			#prox, #submit_btt {
				margin-top: 5%;
				border: 1px solid black;
				width: 50%;
				height: 20%;
				background-color: #FF7777;
				transition: 0.1s;
			}
			#prox:active, #submit_btt:active {
				background-color: #FF8888;
			}
			select {
				width: 80%;
				height: 10%;
				margin: 5px;
			}
			#login {
				position: absolute;
				right: 20;
				top: 10;
			}
			a {
				text-decoration: none;
				color: #FF7777
			}
		</style>
		<script>
			function proxima(id) {
				nid = "pergunta_"+id;
				document.getElementById(nid).style.display = "none";
				id2 = id+1;
				nid = "pergunta_"+id2;
				document.getElementById(nid).style.display = "block";
			}
		</script>
	</head>
	<body>
		<div id='login'>
			<a href="login.php">Login</a>
		</div>
		<center>
			<form method="post" action="#" id="form_id">

			<div id="pergunta_1" class="div_perg">
				<h2>Contato</h2>
				<input type="text" name="nome" id="nome" placeholder="Nome..."><br>
				<input type="text" name="celular" id="celular" placeholder="Whatsapp..."><br>
				<input type="text" name="codigo" id="codigo" placeholder="Código..."><br>
				<input type="button" name="prox" id="prox" onclick="proxima(1)" value="Próxima">
			</div>
			<div id="pergunta_2" class="div_perg">
				<h2>10 Perguntas...</h2>
				<p>Qual das opções você acha que mais combina com você ?</p>
				1: <select name="p1">
					<option value="1">a) Sou do sexo MASCULINO</option>
					<option value="2">b) Sou do sexo FEMININO</option>
				</select><br>
				2: <select name="p2">
					<option value="1">a) Procuro alguém do sexo MASCULINO</option>
					<option value="2">b) Procuro alguém do sexo FEMININO</option>
				</select><br>
				3: <select name="p3">
					<option value="1">a) Gosto de ficar em casa curtindo um netflix e junto com meus bichinhos.</option>
					<option value="2">b) Gosto de ficar em casa, porém não muito, fico entediado fácil.</option>
					<option value="3">c) Não sei se gosto ou não de ficar em casa, sou meio indeciso quanto a isso.</option>
					<option value="4">d) Prefiro sair do que ficar em casa , FATO!</option>
					<option value="5">e) Odeio ficar em casa, adoro sair para os rolês e a pior parte é quando acabam.</option>
				</select><br>
				4: <select name="p4">
					<option value="1">a) Eu amo um único estilo de música.</option>
					<option value="2">b) Gosto de uns dois ou três estilos musicais.</option>
					<option value="3">c) Na real que eu gosto de vários estilos.</option>
					<option value="4">d) Ouço de tudo, mas não me apego a nenhum estilo.</option>
					<option value="5">e) Não gosto muito de música.</option>
				</select><br>
				5: <select name="p5">
					<option value="1">a) Me considero uma pessoa política, engajada em discussões e com posicionamento definido.</option>
					<option value="2">b) Gosto de discussões políticas, porém, ainda não formei um posicionamento próprio.</option>
					<option value="3">c) Não curto falar de política, quando tem discussão, só me calo.</option>
					<option value="4">d) Não gosto de discussões políticas. Eu não me meto nisso.</option>
					<option value="5">e) Política não se discute.</option>
				</select><br>
				<input type="button" name="prox" id="prox" onclick="proxima(2)" value="Deu!">
			</div>
			<div id="pergunta_3" class="div_perg">
				<h2>10 Perguntas...</h2>
				<p>Qual das opções você acha que mais combina com você ?</p>
				6: <select name="p6">
					<option value="1">a) Me estresso com facilidade, tenho o estopim curto.</option>
					<option value="2">b) Não estouro com facilidade, MAS NÃO ME CUTUCA !</option>
					<option value="3">c) Sou de boas, as vezes fico nervoso mas sei me controlar.</option>
					<option value="4">d) Sou super sossegado, de vez enquando saio do sério mas nem dá pra notar.</option>
					<option value="5">e) Sou um verdadeiro Buda, muito tranquilo, nem lembro a última vez que fiquei sem paciência.</option>
				</select><br>
				7: <select name="p7">
					<option value="1">a) Se não for pra arrasar nem saio de casa.</option>
					<option value="2">b) Não gosto de sair feio, mas também não sacrifico o conforto.</option>
					<option value="3">c) Depende do dia, o meu nível de beleza varia bastante.</option>
					<option value="4">d) Sou meio largado, mas sei me vestir para ocasiões específicas.</option>
					<option value="5">e) Sou largado mesmo, e que se dane a opnião dos outros.</option>
				</select><br>
				8: <select name="p8">
					<option value="1"></option>
					<option value="2"></option>
					<option value="3">Resposta c</option>
					<option value="4">Resposta d</option>
					<option value="5">Resposta e</option>
				</select><br>
				9: <select name="p9">
					<option value="1">Resposta a</option>
					<option value="2">Resposta b</option>
					<option value="3">Resposta c</option>
					<option value="4">Resposta d</option>
					<option value="5">Resposta e</option>
				</select><br>
				10: <select name="p10">
					<option value="1">Resposta a</option>
					<option value="2">Resposta b</option>
					<option value="3">Resposta c</option>
					<option value="4">Resposta d</option>
					<option value="5">Resposta e</option>
				</select><br>
				<input type="button" name="prox" id="prox" onclick="proxima(3)" value="Deu!">
			</div>
			<div id="pergunta_4" class="div_perg">
				<h2>Enviar respostas...</h2>
				<input type="button" id="submit_btt" onclick="salvar()" value="Enviar">
			</div>
		</form>
		</center>
		<script>
			document.getElementById("pergunta_1").style.display = "block";
			function salvar() {
				if (document.getElementById("celular").value == "" || document.getElementById("nome").value == "" || document.getElementById("codigo").value == "") {
					document.getElementById("pergunta_1").style.display = "block";
					document.getElementById("pergunta_4").style.display = "none";
					alert("Preencha todos os campos !");
				} else {
					document.getElementById("form_id").submit();
				}
			}
		</script>
	</body>
</html>
<?php
	function valida($cod)
	{
		$x = substr($cod, 0, 5);
		$soma = 0;
		for ($i=0; $i < strlen($x); $i++) { 
			$soma = $soma + str_split($x)[$i];
		}
		$soma = str_pad($soma, 2, "0", STR_PAD_LEFT);
		$y = str_pad(($soma+$x), 6, "0", STR_PAD_LEFT);

		$ncod = $x.$soma.$y;

		if ($cod == $ncod) {
			return True;
		} else {
			return False;
		}
	}

	function existe($cod) {
		$link = mysqli_connect("localhost", "root", "", "barraca-beijo");

		if (mysqli_connect_errno()) {
			echo "Ocorreu um erro na conexão...";
		}

		$result = mysqli_query($link, "SELECT * FROM `cods` WHERE `cod` LIKE '".$cod."'");

		$num = mysqli_num_rows($result);

		return $num;
	}

	$link = mysqli_connect("localhost", "root", "", "barraca-beijo");

	if (isset($_POST['nome']) and isset($_POST['celular']) and isset($_POST['codigo'])) {
		if (valida($_POST['codigo'])) {
			if (existe($_POST['codigo']) == 0) {
				$nome = $_POST['nome'];
				$celular = $_POST['celular'];
				$pergunta = $_POST['p1'].$_POST['p2'].$_POST['p3'].$_POST['p4'].$_POST['p5'].$_POST['p6'].$_POST['p7'].$_POST['p8'].$_POST['p9'].$_POST['p10'];
				
				if (mysqli_connect_errno()) {
					echo "Ocorreu um erro na conexão...";
				}
				$mysqli_insert = "INSERT INTO `pessoas`(`ID`, `nome`, `whatsapp`, `respostas`) VALUES (NULL,'".$nome."','".$celular."','".$pergunta."')";
				$insert = mysqli_query($link, $mysqli_insert);

				$mysqli_insert = "INSERT INTO `cods`(`ID`, `cod`) VALUES (NULL,'".$_POST['codigo']."')";
				$insert = mysqli_query($link, $mysqli_insert);

				echo "<h2><center>Cadastrado com sucesso !!!</center></h2>".existe($_POST['codigo']);
				//echo $mysqli_insert;
				mysqli_close($link);

				//echo("nome: ".$nome." celular: ".$celular." respostas: ".$pergunta);
			} else {
				echo "<h2><center>Código já usado...</center></h2>";
			}
	} else {
			echo "<h2><center>Código Errado...</center></h2>";
		}	
	}

?>