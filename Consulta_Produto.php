<!-- <!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
	
	<br>
		<div class="row">
			<div class="col"></div>
			<div class="col-6">
          <h1 class="text-center bg-success text-white">CONSULTA PRODUTO</h1>
					<?php
            // echo nl2br(file_get_contents("cadastros/produto.txt"));
          ?>
			</div>
			<div class="col"></div>
		</div>
		<div class="text-center">
            <br>
			<button type="button" class="btn btn-success" onclick="javascript:location.href ='menu.php';">Voltar</button>
		</div>
	</div>
  
  </body>
</html> -->

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
            align-items: center;
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

<?php

    include_once('conexao.php');
    try{
      
      $stmt = $conn->prepare('SELECT * FROM produto');
      $stmt->execute();
    
      while($row = $stmt->fetch()){
          echo "<p>";
          echo "<br><b>Codigo: </b>".$row['codigo'];
          echo "<br><b>Nome: </b>".$row['nome'];
          echo "<br><b>Fornecedor: </b>".$row['fornecedor'];
          echo "<br><b>Quantidade: </b>".$row['quant'];
          echo "<br>";
?>
  <button onclick="window.location.href='alterarProduto.php?id=<?php echo $row['codigo'];?>'">Alterar</button>

  <button onclick="window.location.href='excluirProduto.php?id=<?php echo $row['codigo'];?>'">Excluir</button>

  <button onclick="window.location.href='menu.php'">Voltar</button>
  <hr>
        
<?php
    }
  }
  catch(PDOException $e)
  {
      echo 'ERROR: '.$e->getMesssage();  
  }
?>
