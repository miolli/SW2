<!-- <!DOCTYPE html>
<html>
	<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> LOGIN </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

		<form id="UserEnter" method="POST" action="#">
			<label>Login: </label>
			<input type="text" name="Userlogin"><br> 
			<label>Senha: </label>
			<input type="number" name="Usersenha"><br><br>
			<input type="submit" value="Logar">
		</form>

		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> -->

<?php

// if (!empty($_POST)) 
// {	
	
// 	$email = $_POST['Userlogin'];
// 	$senha = $_POST['Usersenha'];

// 	include_once('conexao.php');

// 	$rs = $conn->query("SELECT * FROM usuario where email='$email'and 
// 													senha='$senha'");
	
// 	$rs -> execute();
	
// 	if($rs->fetch(PDO::FETCH_ASSOC) == true)
// 	{ 	
// 		$_SESSION["login"] = "email";
// 		header('Location:menu.php');
// 	}
// 	else
// 	{
// 		echo"<script>
// 					alert('Nome de usuário ou senha incorreto');
// 			 </script>";
// 	}
// }

	// if (!empty($_POST)) {
		
	// 	$login = $_POST['login'];
	// 	$senha = $_POST['senha'];

	// 	if (($login == "higo") && ($senha == '2005')) {
					
	// 		echo"<script>alert('Funcionou')</script>";

	// 	}
	// 	else{
	// 		echo "<script>alert('Não Funfou')</script>";
	// 	}

	// }


?>