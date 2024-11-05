<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$produto = $_POST['produto'];

	try 
	{

		$stmt = $conn->prepare("UPDATE fornecedor SET nome = :nome,
													  cnpj = :cnpj,
													  produto = :produto WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':cnpj' => $cnpj,
							 ':produto' => $produto));
		
		header( "refresh:0;url=Consulta_Fornecedor.php" );

		echo "<script>alert('FORNECEDOR ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>

