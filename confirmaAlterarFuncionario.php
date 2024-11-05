<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];

	try 
	{

		$stmt = $conn->prepare("UPDATE funcionario SET nome = :nome,
													  cargo = :cargo WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cargo' => $cargo));
		
		header( "refresh:0;url=Consulta_Funcionario.php" );

		echo "<script>alert('FUNCIONÁRIO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>

