<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="icon" href="../IMAGES/login.png">
		<link rel="stylesheet" type="text/css" href="../CSS/reset.css">
		<link rel="stylesheet" type="text/css" href="../CSS/cadastro.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
	</head>
	<body>
		<form action="logPart.php" method="POST" id="body-form">
			<div id="id">
				<img src="../IMAGES/user.svg" alt="icone de login" id="icone-cadastro">
				<article id="login-name">Login</article>
				<br />
				<input type="text" name="user-name" class="style-input" style="text-align: center" placeholder="User name" required="Preenchimento obrigatório">
				<br />
				<input type="password" name="senha" class="style-input" style="text-align: center" placeholder="Password" required="Preenchimento obrigatório">
				<br />
				<input type="submit" value="Logar" id="btn">
			</div>
		</form>
	</body>
</html>