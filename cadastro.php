<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<link rel="icon" href="padlock.png">
		<link rel="stylesheet" type="text/css" href="Curso Alura/css/reset.css">
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
	</head>
	<body>
		<form acion="cadastro.php" method="POST" id="body-form">
			<div id="id">
				<img src="padlock.png" alt="icone de cadastro" id="icone-cadastro">
				<article id="register-name">cadastro</article>
				<br />
				<input type="text" name="user-name" class="style-input" style="text-align: center" placeholder="User name">
				<br />
				<input type="password" name="senha" class="style-input" style="text-align: center" placeholder="Password">
				<br />
				<input type="text" name="gmail" placeholder="Gmail" style="text-align: center" class="style-input">
				<br />
				<input type="submit" value="Cadastrar" id="btn">
			</div>
		</form>
		<?php
			$conexao = mysqli_connect('localhost','root','password','autenticacao');
			$nome = $_POST['user-name']; 
			$senha = $_POST['senha'];
			$gmail = $_POST['gmail'];
			$query = "INSERT INTO cadastro(user_name,senha,gmail)VALUES('$nome','$senha','$gmail')";
			mysqli_query($conexao,$query);
		?>
	</body>
</html>