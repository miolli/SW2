<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
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
    <span id="username"><?php echo $_SESSION['login']; ?></span>
    <a href="index.php">Sair</a>
</header>
    <h1>Cadastro de Funcionário</h1>
    <a href="menu.php">Sair</a>
    <form action="#" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required>
        
        <button type="submit"  value="Salvar">Salvar</button>
        <button type="reset"  value="Limpar">Limpar</button>
        <button type="button"  onclick="javascript:location.href ='menu.php';">Sair</button>
    </form>

</body>
</html>

<?php
if(!empty($_POST))
{
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];

    include_once('conexao.php');

    try {
        $system = $conn->prepare("INSERT INTO funcionario (nome, cargo)
                                    VALUES (:nome, :cargo)");
        
        $system->bindParam(':nome', $nome);
        $system->bindParam(':cargo', $cargo);

        $system->execute();

        echo "<script>alert('Cadastrado com Sucesso');</script>";

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
    $conn = null;
}


// if(!empty($_POST))
// {
//   $funcionario = array($_POST['nome'], $_POST['cargo']);

//   $conteudo = "Funcionário: ";
  
//   for($i = 0; $i < count($funcionario); $i++)
//   {
//     // echo "<br>".$cliente[$i];
//     $conteudo .= $funcionario[$i].", ";
//   }
//   $conteudo .= "

//   ";

//   $caminho = "cadastros/funcionario.txt";
  
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
