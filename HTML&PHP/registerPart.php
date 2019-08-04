<?php
	$conexao = mysqli_connect('localhost','root','password','autenticacao');
	$nome = $_POST['user-name']; 
	$senha = $_POST['senha'];
	$gmail = $_POST['gmail'];
	$query = "INSERT INTO cadastro(user_name,senha,gmail)VALUES('$nome','$senha','$gmail')";
	$sel = "SELECT * FROM cadastro WHERE user_name='$nome' and gmail='$gmail'"; 
	$execute = mysqli_query($conexao,$sel);
	if(mysqli_num_rows($execute) == 0){
			mysqli_query($conexao,$query);
			header('Location: /Projects/Autenticacao/HTML&PHP/login.php');
	}
	if(mysqli_num_rows($execute) == 1){
		echo "Hello World";
	}
?>