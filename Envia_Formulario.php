<?php

	session_start();

	include 'conecta.php';
	

	header('Content-Type: text/html; charset=utf-8');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	mysqli_select_db($conecta, "clientes") or print(mysqli_error());

	$sql = "INSERT INTO contato_tcc (nome, email,mensagem, dt_atualiza) 
			VALUES ('$nome', '$email','$mensagem',now())";

	
	//echo "INSTRUÇÃO REALIZADA => ".$sql;


	//echo "<a href='exibe.php'>Exibe</a>";

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 
	

	echo "<script>alert('Mensagem enviada com êxito!'); location.href='index.html'; </script>";	


?>

