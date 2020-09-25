<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!--links para o funcionamento da pág-->
      <meta charset="utf-8">
   

      <title>Ha_Bordo.com</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="sty.css">
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="estilo1.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

   </head>



   <body>
<!--estilo nav-->
          <style type="text/css">
         .logo
            {
           margin-right: 400px;
            font-family: 'Crimson Text', serif, font-size -2px;
            color:  ;     
            }
         </style>


       <!--inicio da nav-bar-->
     <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm bg-transparent fixed-top"> <a href="#" class="navbar-brand font-weight-bold d-block d-lg-none"></a>
  
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <h4 class="logo" style="color: #87CEEB">HA BORDO</h4><!--titulo usado como logo-->
          
            <!--itens da nav-->
            <li class="nav-item dropdown megamenu"><a id="megamneu" href="http://127.0.0.1/curso/html/projeto-final/index1.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link  font-weight-bold text-uppercase disabled">Ínicio</a>
            <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Destinos</a></li>
            <li class="nav-item"><a href="http://127.0.0.1/curso/html/projeto-final/promo.html" class="nav-link font-weight-bold text-uppercase">Pacotes</a></li>
            <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Contato</a></li>
            <a href="telalogin.php" class="right">Sair</a>

        </ul>
    </div>
</nav>

     <!--carrosel com informações sobre o app-->
      <div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="https://www.viagenscinematograficas.com.br/wp-content/uploads/2020/02/Top-10-Melhores-Praias-Brasil-Capa-2-740x431.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Ha Bordo</h2>
                     <h4>Pacotes Promocionais só aqui!</h4>
                     <p>Os melhores hotéis, pacotes e passagens aéreas para uma viagem inesquecível. Aproveite! Reserve agora pacotes nacionais com os melhores preços na Ha Bordo</p>
                     <a href="register.php "><button class="button button2">Entre</button></a>
                  </div>
               </div>


               <div class="carousel-item">
                  <img class="d-block w-100" src="https://www.bancorbras.com.br/media/189929/imagem.jpg" height="640" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Pacotes Promocionais</h2>
                     <h4>Descontos imperdivéis</h4>
                     <p>Os melhores hotéis, pacotes e passagens aéreas para uma viagem inesquecível. Aproveite! Reserve agora pacotes nacionais com os melhores preços na Ha Bordo</p>
                     <button class="button button2">Entre</button>
                  </div>
               </div>
            </div>

            <!--proximo e anterior-->
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="img/left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="img/right.png" alt="#" />
            </a>
         </div>
      </div>


        <!--informação sobre aplicativo e função-->
      <div id="about" class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h4>Nosso Aplicativo</h4>
                  <h3 style="text-transform: none !important">Serviços</h3>
                  <p>O há bordo é um aplicativo de viagem desenvolvido para programar pacotes de acordo com a vontade e condição do cliente, além de que ele pode ajudar desde a escolha do destino até a reserva de hotéis, que cabem no seu bolso.</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="img/v.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>


       <!--sobre o que o aplicativo oferece-->
      <div id="hiw" class="layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">Planeje sua viajem</h3>
                  <p class="white_font">Opções de personalização de seu pacote, escolha seu meio de transporte e até sua acomodação.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <a href="#"><img class="margin_top_30 img-responsive" src="img/blog1.jpg" alt="#" />
                  <h3 class="blog_head">Pacotes Personalizados</h3></a>
               </div>
               <div class="col-md-4">
                 <a href="#"> <img class="margin_top_30 img-responsive" src="https://www.galeriadaarquitetura.com.br/Img/projeto/SF1/367/casa-paraty2255.jpg" height="330" alt="#" />
                  <h3 class="blog_head">Hospedagem</h3></a>
               </div>
               <div class="col-md-4">
                  <a href="#"><img class="margin_top_30 img-responsive" src="https://media-cdn.tripadvisor.com/media/photo-s/15/22/fc/f3/vista-do-topo-do-morro.jpg" height="330" alt="#" />
                  <h3 class="blog_head">Passeios</h3></a>
               </div>
            </div>
         </div>
      </div>

           <!--informações sobre serviço do aplicativo-->
      <div id="service" class=" layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>OUTROS SERVIÇOS</h3>
                  <p>Nossos serviços irão ir além de construir pacotes.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>

            <div class="row">
               <div class="col-md-8 service_blog">
                  <img class="margin_top_30 img-responsive" src="https://imgs.jusbr.com/publications/images/8cd372102c205b26ce88b5efbca5071b" width="600" height="360" alt="#" />
                  <h3 class="blog_head">Preços de acordo com suas finanças</h3>
               </div>

               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_bg_2dokOW8JNxGqXCUPgVKT4qGbmrxiZxA&usqp=CAU" height="360" alt="#" />
                  <h3 class="blog_head">Opção de Economia</h3>
               </div>

               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="https://img.ibxk.com.br/2016/06/07/07160035082346.jpg"  height="290" alt="#" />
                  <h3 class="blog_head">Destino Virtual</h3>
               </div>

               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="https://www.autodata.com.br/admin/imagens/noticias/locadoras-reduzem-taxas-para-motoristas-de-aplicativo_8e2713d7ea9c3b8173ad9c1f8db93c59.jpg" height="290" alt="#" />
                  <h3 class="blog_head">Conexão com Uber</h3>
               </div>

               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="https://previews.123rf.com/images/tonefotografia/tonefotografia1708/tonefotografia170800403/83424511-planning-travel-concept-thailand-passport-on-old-map.jpg" height="290" alt="#" />
                  <h3 class="blog_head">Escolha seu guia</h3>
               </div>
            </div>
         </div>
      </div>
      

              <!--informação adicional-->
      <div id="wcs" class=" layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  <h3>Pesquisa do Cliente </h3>
                  <p>O que os clientes mais querem.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>

            <div class="row">
               <div class="col-md-11">
                  <div class="full testimonial_blog">
                     <p>Segurança</p>
                     <p>O que foi descoberto atráves de pesquisas é que o mais importante para um aplicativo é a segurança, para que possam navegar sem problemas.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
            <!--rodape-->
    <div class="content">
</div>
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
        <!--script para o funcionamento do carrosel-->
      <script src="jquery-3.3.1.min.js"></script>
      <script src="bootstrap.min.js"></script>
       

      
     
   </body>
</html>