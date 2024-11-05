<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
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
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 400px;
        }
        label {
            font-weight: bold;
        }
        input {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            font-size: 16px;
            border: none;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <img src="imagem/logo.png">
    <a href="index.php">Sair</a>
</header>

    <h1>Cadastro de Produto</h1>
    <a href="menu.php">Sair</a>
    <form action="#" method="post">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" required>

        <label for="fornecedor">Fornecedor:</label>
        <input type="text" name="fornecedor" required>

        <label for="quant">Quantidade:</label>
        <input type="number" name="quant" required>

        <button type="submit"  value="Salvar">Salvar</button>
        <button type="reset"  value="Limpar">Limpar</button>
        <button type="button"  onclick="javascript:location.href ='menu.php';">Sair</button>
    </form>

</body>
</html>

<?php
if(!empty($_POST))
{
    $nome = $_POST['produto'];
    $fornecedor = $_POST['fornecedor'];
    $quant = $_POST['quant'];

    include_once('conexao.php');

    try {
        $system = $conn->prepare("INSERT INTO produto (nome, fornecedor, quant)
                                    VALUES (:nome, :fornecedor, :quant)");
        
        $system->bindParam(':nome', $nome);
        $system->bindParam(':fornecedor', $fornecedor);
        $system->bindParam(':quant', $quant);

        $system->execute();

        echo "<script>alert('Cadastrado com Sucesso');</script>";

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
    $conn = null;
}


// if(!empty($_POST))
// {
//   $produto = array($_POST['produto'], $_POST['fornecedor'], $_POST['quant']);

//   $conteudo = "Produto: ";
  
//   for($i = 0; $i < count($produto); $i++)
//   {
//     $conteudo .= $produto[$i].", ";
//   }
//   $conteudo .= "

//   ";

//   $caminho = "cadastros\produto.txt";
  
//         if(file_put_contents($caminho,$conteudo,FILE_APPEND))
//         {
//           echo"<script> alert('Dados cadastrado com sucesso');</script>";
//         }
//         else
//         {
//           echo"<script> alert('Erro ao cadastrar!');</script>";
//         }
//   }
?>
