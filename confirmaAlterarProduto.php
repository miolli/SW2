<?php

include_once('conexao.php');



$cod = $_POST['codigo']; 
$nome = $_POST['nome'];
$fornecedor = $_POST['fornecedor'];
$quant = $_POST['quant'];

	try 
	{

		$stmt = $conn->prepare("UPDATE produto SET nome = :nome,
													  fornecedor = :fornecedor,
													  quant = :quant WHERE codigo = :id");

		$stmt->execute(array(':id' => $cod, 
							 ':nome' => $nome,
							 ':fornecedor' => $fornecedor,
							 ':quant' => $quant));
		
		header( "refresh:0;url=consulta_Produto.php" );

		echo "<script>alert('PRODUTO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

 ?>
