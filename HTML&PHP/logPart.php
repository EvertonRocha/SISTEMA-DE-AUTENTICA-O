<?php
	$conexao = mysqli_connect('localhost','root','password','autenticacao');
	$nome = $_POST['user-name'];
	$senha = $_POST['senha'];
	$query = "INSERT INTO login(user_name,senha)VALUES('$nome','$senha')";
	$sel = "SELECT * FROM login WHERE user_name='$nome' and senha='$senha'";
	$search = mysqli_query($conexao,$sel);
	if(mysqli_num_rows($search) == 0){
		mysqli_query($conexao,$query);
	}
	header('Location: ../../Curso Alura/html/FirstClass.html');
?>