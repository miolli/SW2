<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];


	try 
	{

		$stmt = $conn->prepare("UPDATE usuario SET nome = :nome,
													  senha = :senha,
													  email = :email WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':senha' => $senha,
							 ':email' => $email));
		
		header( "refresh:0;url=Consulta_Usuario.php" );

		echo "<script>alert('USUÁRIO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>

