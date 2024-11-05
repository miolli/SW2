<?php

	session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>

    <style>
        
        @import "compass/css3";
        @import url(https://fonts.googleapis.com/css?family=Vibur);

*{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  font-family:arial;
}

/* h1{
  color:#ccc;
  text-align:center;
  font-family: 'Vibur', cursive;
  font-size: 50px;
} */

.login-form{
  width:350px;
  padding:40px 30px;
  background:#eee;
  @include border-radius(4px);
  margin:auto;
  position: absolute;
  left: 0;
  right: 0;
  top:30%;
  @include translateY(-50%);
}

.form-group{
  position: relative;
  margin-bottom:15px;
}

.form-control{
  width:100%;
  height:50px;
  border:none;
  padding:5px 7px 5px 15px;
  background:#fff;
  color:#666;
  border:2px solid #ddd;
  @include border-radius(4px);
    &:focus, &:focus + .fa{
      border-color:#10CE88;
      color:#10CE88;
    }
}

.form-group .fa{
  position: absolute;
  right:15px;
  top:17px;
  color:#999;
}

.log-btn{
  background:#0AC986;
  dispaly:inline-block;
  width:100%;
  font-size:16px;
  height:50px;
  color:#fff;
  text-decoration:none;
  border:none;
  @include border-radius(4px);
}

/* .link{
  text-decoration:none;
  color:#C6C6C6;
  float:right;
  font-size:12px;
  margin-bottom:15px;
  &:hover{
    text-decoration: underline;
    color:#8C918F;
  }
} */

    </style>
</head>
<body>

<form action="#" method="POST">
<div class="login-form"  >
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="E-mail" name="Userlogin">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" name="Usersenha">
       <!-- <i class="fa fa-lock"></i> -->
     </div>
     <button type="submit" class="log-btn">Log in</button>
</div>
</form>
</body>
</html>

<?php

if (!empty($_POST)) 
{	
	
	$email = $_POST['Userlogin'];
	$senha = MD5($_POST['Usersenha']);

	include_once('conexao.php');

	$rs = $conn->query("SELECT * FROM usuario where email='$email'and 
													senha='$senha'");
	
	$rs -> execute();
	
	if($rs->fetch(PDO::FETCH_ASSOC) == true)
	{ 	
		$_SESSION['login'] = $email;
		header('Location:menu.php');
	}
	else
	{
		echo"<script>
					alert('Nome de usuário ou senha incorreto');
			 </script>";
	}
}


// if (!empty($_POST)) 
// {
  
//   $login = $_POST['login'];
//   $senha = $_POST['senha'];
  
//   if(($login == "higo")&&($senha == "2005"))
//   {
//     header('Location:menu.php');
//   }
//   else
//   {
//     echo"<script>alert('Nome de usuário ou senha incorreto');</script>";
//   }
// }

?>