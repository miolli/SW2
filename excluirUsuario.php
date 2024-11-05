<link rel="stylesheet" href="css/styless.css">

<?php

	echo"<h1>Confirmar: Excluir Usuário?</h1>";

	$cod = $_GET['id'];
	
	include_once('conexao.php');
	 
		$select = $conn->prepare("SELECT * FROM usuario where codigo=$cod");
		$select->execute();
	
		while($row = $select->fetch()) 
		{
			echo "<p>";
			echo "<p>";
			echo "<br><b>Codigo: </b>".$row['codigo'];
			echo "<br><b>Nome: </b>".$row['nome'];
			echo "<br><b>Senha: </b>".$row['senha'];
			echo "<br><b>E-mail: </b>".$row['email'];
			echo "</p>";
?>
	
	<button onclick="window.location.href='confirmaExcluirUsuario.php?id=<?php echo $row['codigo'];?>'">
		Confirmar
	</button>
	
	<button onclick="window.location.href='Consulta_Cliente.php'">Voltar</button>

<?php
		}
?>
