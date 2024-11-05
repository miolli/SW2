<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
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
        <script type="text/javascript" src="js/buscaCEP.js"></script>
        <script type="text/javascript" src="js/validaCPF.js"></script>
</head>
<body>

<header>
    <img src="imagem/logo.png">
    <a href="index.php">Sair</a>
</header>

    <h1>Cadastro de Cliente</h1>
    <a href="menu.php">Sair</a>
    <form action="#" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" onblur="TestaCPF(this.value);" required>

        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);" required>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua">
        
        <label for="rua">Número:</label>
        <input type="number" name="num" required>

        <label for="rua">Bairro:</label>
        <input type="text" name="bairro" id="bairro">

        <label for="rua">Cidade:</label>
        <input type="text" name="cidade" id="cidade">

        <label for="rua">Estado:</label>
        <input type="text" name="estado" id="uf">

        <label for="rua">Celular:</label>
        <input type="number" name="celular" required>

        <label for="rua">E-mail:</label>
        <input type="email" name="email" required>

        
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
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cep = $_POST['cep'];
    $num = $_POST['num'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    include_once('conexao.php');

    try {
        $system = $conn->prepare("INSERT INTO cliente (nome, cpf, rg, cep, numero, celular, email)
                                    VALUES (:nome, :cpf, :rg, :cep, :numero, :celular, :email)");
        
        $system->bindParam(':nome', $nome);
        $system->bindParam(':cpf', $cpf);
        $system->bindParam(':rg', $rg);
        $system->bindParam(':cep', $cep);
        $system->bindParam(':numero', $num);
        $system->bindParam(':celular', $celular);
        $system->bindParam(':email', $email);

        $system->execute();

        echo "<script>alert('Cadastrado com Sucesso');</script>";

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
    $conn = null;
}
?>



<!-- 
// if(!empty($_POST))
// {
//   $cliente = array($_POST['nome'], $_POST['cpf'], $_POST['rg'], $_POST['cep'], $_POST['rua'], $_POST['num'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['celular'], $_POST['email'] );

//   $conteudo = "Cliente: ";
  
//   for($i = 0; $i < count($cliente); $i++)
//   {
//     $conteudo .= $cliente[$i].", ";
//   }
//   $conteudo .= "

//   ";

//   $caminho = "cadastros\cliente.txt";
  
//         if(file_put_contents($caminho,$conteudo,FILE_APPEND))
//         {
//           echo"<script> alert('Dados cadastrado com sucesso');</script>";
//         }
//         else
//         {
//           echo"<script> alert('Erro ao cadastrar!');</script>";
//         }
//   } 
-->

