<link rel="stylesheet" href="css/styless.css">

<?php

	echo"<h1>Confirmar: Excluir Produto?</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM produto where codigo=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['codigo'];
			echo "<br><b>Nome: </b>".$row['nome'];
			echo "<br><b>Fornecedor: </b>".$row['fornecedor'];
			echo "<br><b>Quantidade: </b>".$row['quant'];
			echo "<br>";
			echo "</p>";
?>
	
	<button onclick="window.location.href='confirmaExcluirProduto.php?id=<?php echo $row['codigo'];?>'">
		Confirmar
	</button>
	
	<button onclick="window.location.href='Consulta_Cliente.php'">Voltar</button>

<?php
		}
?>
