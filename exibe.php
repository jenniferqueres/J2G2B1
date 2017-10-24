<?php

	session_start();

	include 'conecta.php';

	header('Content-Type: text/html; charset=utf-8');


	mysqli_select_db($conecta, "clientes") or print(mysqli_error());

	$sql = "SELECT id_usuario, nome, email, mensagem FROM 'contato_tcc'";
	$result=mysqli_query($conecta, $sql);
	While($consulta=mysqli_fetch_array($result))
    {
        Print "Nome:$consulta[nome]<br>
        		email:$consulta[email]<br>
                mensagem:$consulta[mensagem]<br>";
                	

        		
    } 
    Mysqli_free_result($result); 


	

	mysqli_query($conecta, $sql);

	mysqli_close($conecta); 


?>


