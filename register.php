<?php
      if(isset($_COOKIE['login'])){
         header("Location: ./");
     }
include("db.php");
    $error = "";
    if(isset($_POST['registrar'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $apelido = $_POST['apelido'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $notify = $_POST['notify'];

        $verify = mysql_query("SELECT * FROM users WHERE email = '$email'");
        

        if(strlen($nome) < 3){
            $error = "<h2 style='color:red'>Nome muito pequeno</h2>";
        }else if (strlen($email) < 8){
             $error = "<h2 style='color:red'>email muito pequeno</h2>";
        }else if (strlen($apelido) < 8){
             $error = "<h2 style='color:red'>apelido muito pequeno</h2>";    
        }else if (strlen($pass) < 8){
             $error = "<h2 style='color:red'>senha muito pequena</h2>";
        }else if (strlen($cpass) < 8){
             $error = "<h2 style='color:red'>A senha tem que ser igual</h2>";
        }else if (mysql_num_rows($verify) >0){
            $error = "<h2 style='color:red'>Email ja cadastrado!</h2>";
        }else{
             $hash = bin2hex(mcrypt_create_iv(12, MCRYPT_DEV_URANDOM));     

             $query = mysql_query("SELECT hash FROM users WHERE hash = '$hash' ");

             if(mysql_num_rows($query) <1){
                 mysql_query("INSERT INTO `users` ( `nome`, `email`, `apelido`, `senha`, `notify`, `active`, `hash`) VALUES ('$nome','$email','$apelido','$pass','$notify','false','$hash') ");
            $error = "<h2 style='color:green'>Registrado com sucesso, verifique seu email!</h2>";
            }else{
                return $hash;
            }   
        }
    }
?> 


<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>



    <!--estilo da nav-bar-->
          <style type="text/css">
            .logo
            {
           margin-right: 500px;
            font-family: 'Crimson Text', serif, font-size -2px;
            color:  ;

         
            }

         </style>


          <link rel="stylesheet" type="text/css" href="styleinicial.css">
           <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
           <link rel="stylesheet" type="text/css" href="estilo1.css">
      </head>
<body background="https://i.pinimg.com/originals/0e/a3/3d/0ea33df11c43b2bcfbaab9bd01770d9f.jpg">



     <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm bg-transparent fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #87CEEB">HA BORDO</h4><!--titulo usado como logo-->
          
            <!--itens da nav-->
            <li class="nav-item dropdown megamenu"><a id="megamneu" href="http://127.0.0.1/curso/html/trabalho_Ah_Bordo/index.php#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase">Ínicio</a>
            <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Destinos</a></li>
            <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-uppercase">Pacotes</a></li>
            <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Contato</a></li>

        </ul>
    </div>
</nav>

     <center>
        <div class="panel">
            <?php echo $error; ?>
             <form class="formulario" method="post"> 
        <p><h1>Registre-se</h1></p>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>
        
        <div class="field">
            <label for="telefone">Seu Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
        </div>

        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
        </div>      
        <div class="field">
            <label for="telefone">Senha:</label>
            <input type="password" id="telefone" name="passeword" placeholder="Digite sua senha">
        </div>  

        <div class="field">
            <label for="telefone">Confirmar senha:</label>
            <input type="password" id="telefone" name="passeword" placeholder="Confirme sua senha">
        </div> 
        
        <div class="field">
            <label for="mensagem">Sua mensagem:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required></textarea>
        </div>

        <input type="submit" name="acao" value="Enviar">
    </form>


     <!--rodape-->
    <div class="content">
</div>
<link rel="stylesheet" type="text/css" href="estilo1.css">
    <footer id="rodape">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                  
                    <h3 style=" padding-top: 30px; color: white">HA BORDO </h3><!--escrita ha bordo como a logo da pag-->
          

                </div>
                <div class="col-sm-2">
                    <h5>Inicio</h5><!--inicio de alguns itens do rodape-->
                    <ul>
                        <li><a href="#">Ínicio</a></li>
                        <li><a href="#">Promoções</a></li>
                        <li><a href="#">Pacotes</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre-nós</h5><!--informações sobre a loja, separado em alguns itens-->
                    <ul>
                        <li><a href="#">Informações do App</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Suporte</h5><!--apoio da loja, separado por itens-->
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#">Telefones</a></li>
                        <li><a href="#">Chat</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks"><!--redes sociais-->
                       <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    <a href="#">
                        <button type="button" class="btn btn-default">Contato</button><!--botão para a pagina de contato da loja-->
                    </a>
                </div>
            </div>
        </div>
        <div class="rodape-copyright"><!--final do rodape-->
            <p style="color:black">© 2020 Copyright <i class="fa fa-heart-o" aria-hidden="true"></i> Programadores T01 Front End</p>
        </div>

</body>
</html>