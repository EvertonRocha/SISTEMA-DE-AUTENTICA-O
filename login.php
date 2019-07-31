<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="icon" href="login.png">
		<link rel="stylesheet" type="text/css" href="Curso Alura/css/reset.css">
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
	</head>
	<body>
		<form acion="login.html" method="POST" id="body-form">
			<div id="id">
				<img src="user.svg" alt="icone de login" id="icone-cadastro">
				<article id="login-name">Login</article>
				<br />
				<input type="text" name="user-name" class="style-input" style="text-align: center" placeholder="User name">
				<br />
				<input type="password" name="senha" class="style-input" style="text-align: center" placeholder="Password">
				<br />
				<input type="submit" value="Logar" id="btn">
			</div>
		</form>
		<?php
			$conexao = mysqli_connect('localhost','root','password','autenticacao');
			$nome = $_POST['user-name'];
			$senha = $_POST['senha'];
			$query = "INSERT INTO login(user_name,senha)VALUES('$nome','$senha')";
			mysqli_query($conexao,$query);
		?>
	</body>
</html>