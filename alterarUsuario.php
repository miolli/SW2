<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0px;
        }
        header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #f8f8f8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        header img {
            max-height: 40px;
            margin-left: 40px;
        }
        header a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            padding: 10px;
            padding-bottom: 0px;
            background-color: #ddd;
            border-radius: 5px;
            margin-right: 40px;
            align-content: center;
        }

    </style>
</head>
<body>
<header>
    <img src="imagem/logo.png">
    <a href="index.php">Sair</a>
</header>
</body>
</html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	    <script src="js/buscaCep.js"> </script>
		<script src="js/validaCPF.js"> </script>
		<title>SISTEMA COMERCIAL - ALTERAR USUARIO</title>
		</script>
		<style>
		title{
			margin-top: 10px;
		}
		</style>
	</head>
	<body>

	<?php

		$cod = $_GET['id'];
		
		include_once('conexao.php');
		 
			$select = $conn->prepare("SELECT * FROM usuario where codigo=$cod");
			$select->execute();
		
			$row = $select->fetch();
			
	 ?>
		<form action="confirmaAlterarUsuario.php" method="POST">

			<div class="container">
				<div class="row">
    				<div class="col">
      			
    				</div>
    				<div class="col">
      					<div class="mb-3">
      						<h1 class="bg-primary text-white">Alterar Usuario</h1>
				
							<label for="cname"><b>Código</b></label>
							<input type="text" class="form-control" name="codigo" value="<?php echo $row['codigo'];?>" readonly="true">
							
							<label for="cname"><b>Nome</b></label>
							<input type="text" class="form-control" name="nome" value="<?php echo $row['nome'];?>" required>
							
							<label for="csenha"><b>senha</b></label>
							<input type="text" class="form-control" name="senha" value="<?php echo $row['senha'];?>" required>

							<label for="cemail"><b>email</b></label>
							<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" required>

							<br>	
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Atualizar</button>
								<button type="reset" class="btn btn-success" onclick="javascript: location.href='Consulta_Usuario.php'">Voltar</button>
							</div>
						</div>
  					</div>
  					<div class="col">
      			
    				</div>
				</div>
			</div>
		</form>
	</body>
</html>
					
		


