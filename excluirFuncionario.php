<link rel="stylesheet" href="css/styless.css">

<?php

	echo"<h1>Confirmar: Excluir Funcionário?</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM funcionario where codigo=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['codigo'];
			echo "<br><b>Nome: </b>".$row['nome'];
			echo "<br><b>Cargo: </b>".$row['cargo'];
			echo "<br>";
			echo "</p>";
?>
	
	<button onclick="window.location.href='confirmaExcluirFuncionario.php?id=<?php echo $row['codigo'];?>'">
		Excluir
	</button>
	
	<button onclick="window.location.href='Consulta_Funcionario.php'">Voltar</button>

<?php
		}
?>
