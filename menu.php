<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Serviços</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
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
            background-color: #ddd;
            border-radius: 5px;
            margin-right: 40px;
            align-content: center;
        }
        .user-info {
        display: flex;
        align-items: center;
        }

        .user-info span {
        margin-right: 20px;
        font-weight: bold;
        color: #000;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 50px;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #f2f2f2;
            padding: 10px;
            font-size: 18px;
        }
        td {
            padding: 10px;
            text-align: center;
        }
        button {
            width: 100%;
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
        <div class="user-info">
            <span id="username"><?php echo $_SESSION['login']; ?></span>
            <a href="index.php" id="logout">Sair</a>
        </div>
    </header>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button onclick="javascript:location.href='Cadastro_Cliente.php';">Cliente</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Cadastro_Funcionario.php'">Funcionário</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Cadastro_Fornecedor.php'">Fornecedor</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Cadastro_Produto.php'">Produto</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Cadastro_Usuario.php'">Usuário</button></td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Consulta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button onclick="javascript:location.href='Consulta_Cliente.php'">Cliente</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Consulta_Funcionario.php'">Funcionário</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Consulta_Fornecedor.php'">Fornecedor</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Consulta_Produto.php'">Produto</button></td>
                </tr>
                <tr>
                    <td><button onclick="javascript:location.href='Consulta_Usuario.php'">Usuário</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
