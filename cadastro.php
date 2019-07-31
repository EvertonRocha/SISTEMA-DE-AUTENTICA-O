<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<link rel="icon" href="close.png" id="icon">
		<link rel="stylesheet" type="text/css" href="Curso Alura/css/reset.css">
		<link rel="stylesheet" type="text/css" href="cadastro.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
		<?php
			$conexao = mysqli_connect('localhost','root','password','dados');
			$nome = $_POST['nome']; 
			$idade = $_POST['idade'];
			$query = "INSERT INTO pessoa(nome_pessoa,idade)VALUES('$nome','$idade')";
			mysqli_query($conexao,$query);
		?>
	</head>
	<body>
		<form acion="cadastro.html" method="POST" id="move">
			<div id="id">
				<img src="padlock.png" alt="icone de cadastro" id="icone-cadastro">
				<article id="register-name">cadastro</article>
				<br />
				<input type="text" name="nome" class="name" placeholder="Nome">
				<br />
				<input type="text" name="idade" class="name" placeholder="Idade">
				<br />
				<input type="submit" value="Cadastrar" id="btn">
			</div>
		</form>
	</body>
</html>