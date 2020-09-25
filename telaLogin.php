<?php
     if(isset($_COOKIE['login'])){
         header("Location: ./");
     }
 

     include("db.php");
     $error = "";     

   if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $veriemail = mysql_query("SELECT email FROM users WHERE email = '$email' AND senha = '$pass'");

    if(mysql_num_rows($veriemail) > 0){
         $active = mysql_result(mysql_query("SELECT active FROM users WHERE email = '$email'"),0);
         if($active == true){
          $hash = mysql_result(mysql_query("SELECT hash FROM users WHERE email = '$email' "),0);
          setcookie("login",$hash);
          header("Location: index.html");

         }else
         $error = "<h2 style='color:red'>você precisa confirmar o seu email!</h2>";


    }else{
      $error = "<h2 style='color:red'>senha ou email Errado!</h2>";

    }
   
   }
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link  href="https://fonts.googleapis.com/css?family=comfortaa" rel="stylesheet">
	<meta charset="utf-8">
	<title>Ah_bordo Login</title>
  <!-- título da tela de Login-->
  
</head>
<body background="centro.jpg">
      <div class="login">
        <?php echo $error; ?>
            <img src="img/foto2.jpg" class="usuario" width="100" height="100" alt="">
            <h1>Login</h1>
            <form action="index.php" method="POST">
                <p>Usuário</p>
                <input type="text" name="email" placeholder="Digite seu Email" required> 
                <p>Senha</p>
                <!-- área de login do usuário. -->
                <input type="password" name="pass" placeholder="Insira sua Senha" required="" minlength="8">
                <input type="submit" name="login" value="Logar">
                <h5>ainda não está cadastrado? <a href="register.php">clique aqui</a></h5>    
                  <!-- link de cadastro para novos usuários. -->	
          </form>
        
      </div>
</body>
</html>