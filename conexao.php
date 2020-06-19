<?php
	
	//servidor, usuário, senha
	$conn = mysqli_connect('localhost:3306','root','') or die ("Falha na conexão!!!");

	//base de dados
	mysqli_select_db($conn,'bancopoo');
?>