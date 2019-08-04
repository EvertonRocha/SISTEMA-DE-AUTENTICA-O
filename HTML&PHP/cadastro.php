<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<link rel="icon" href="../IMAGES/person-register.png">
		<link rel="stylesheet" type="text/css" href="../CSS/reset.css">
		<link rel="stylesheet" type="text/css" href="../CSS/cadastro.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
	</head>
	<body>
		<form action="registerPart.php" method="POST" id="body-form">
			<div id="id">
				<img src="../IMAGES/padlock.png" alt="icone de cadastro" id="icone-cadastro">
				<article id="register-name">cadastro</article>
				<br />
				<input type="text" name="user-name" class="style-input" style="text-align: center" placeholder="User name" required/>
				<br />
				<input type="password" name="senha" class="style-input" style="text-align: center" placeholder="Password" required/>
				<br />
				<input type="email" name="gmail" placeholder="E-mail" style="text-align: center" class="style-input" required/>
				<br />
				<input type="submit" value="Cadastrar" id="btn">
			</div>
		</form>
	</body>
</html>
