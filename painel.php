<?php
    // INICIAR SESSÃO
    session_start();
    require_once 'acoes/verifica-logado.php';
    require_once 'acoes/consulta-usuario.php'; // consulta para pegar dados do usuario logado
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon.ico">
    <meta name="description" content="">
    <meta name="author" content="Almir Lima">

    <title>Allana TodaBella Multimarcas</title>
 
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/geral.css" rel="stylesheet">
    <!--Links de acessibilidade-->
    <link rel="stylesheet" href="src/icons/fontawesome5.9.0/css/all.css" />
    <link rel="stylesheet" href="src/css/default.css" />
    <link rel="stylesheet" href="src/css/asb.css" />


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
    
  </head>
  <body>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

  <style>
    .access-button {
      width: 40% !important;
      border-radius: 50px !important;
      border: 5px solid #ffffff1f !important;
    }
    
  </style>




    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Loja de Roupa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Catálogos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#contatos">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cadastrado.php">Cadastrado</a>
          </li>

        </ul>
        <img src="fotos/<?= $_SESSION['foto'] ?>" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="25"> &nbsp; &nbsp;
        <div class="dados-usuario"> <?= $_SESSION['email']; ?> </div>
        <a href="acoes/logout.php" class="btn btn-primary">Sair</a>
      </div>
    </div>
  </nav>
</header>

<main>
  <div class="container-fluid"> <!-- div criada na parte 4 -->
    <?php include_once 'acoes/escreve-mensagem.php'; ?>
  </div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img class="imgslide" src="./images/banner2.jpg">

        <div class="container">
          <div class="carousel-caption ">
            <h1 class="text">Eu mereço roupas novas!</h1>
            <p class="texto">Para o seu conforto compre online e vista felicidade.</p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
       
        <img class="imgslide" src="./images/banner1.jpg">

        <div class="container">
          <div class="carousel-caption">
            <h1 class="text">A moda nunca sai de você.</h1>
            <p class="texto" >Confirme a sua presença online e venha se divertir em nossos produtos.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       
        <img class="imgslide" src="./images/banner3.jpg">


        <div class="container">
          <div class="carousel-caption ml-5">
            <h1 class="text" >Não perca mais tempo.</h1>
            <p class="texto">Pare de perder tempo em outros sites de roupas.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        
        <h2>Cadastrar-se</h2>
        <p>Cadastrar-se e tenha as últimas novidades!! </p>
        <p><a class="btn btn-secondary" href="cadastrar-se.php"> Cadastrar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       

        <h2>Sobre</h2>
        <p>Conheça um pouco da nossa Loja virtual</p>
        <p><a class="btn btn-secondary" href="sobre.php"> Aqui &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2>Configurações</h2>
        <p>Altere as configurações da sua conta</p>
        <p><a class="btn btn-secondary" href="configuracoes.php"> Configuração &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">


    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Lingerie</h2>
        <p class="lead">Não deixe a sua autoestima na mão de outras pessoas. Coloque uma bela lingerie e se sinta maravilhosa, Nunca deixe para amanhã a lingerie que você pode comprar hoje!</p>
      </div>
      <div class="col-md-5">
      <a href=""><img src="images/teste3.jpg"></a>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Camisas</h2>
        <p class="lead">As melhores marcas de camisas da internet estão aqui, venha e aproveite as novidades do mercado</p>
      </div>
      <div class="col-md-5 order-md-1">
      <a href=""><img src="images/teste2.jpg"></a>
      
        

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> Vestidos </h2>
        <p class="lead">Não deixe para amanhã o vestido lindo que você pode usar hoje! Clique na imagem para mais look de vestidos incríves </p>
        
      </div>
      <div class="col-md-5">
      <a href=""><img src="images/teste.jpg"></a>
      
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    <div class="container-fluid bg3 text-center" id="contatos">
  <h3>Contatos</h3>
  <div class="row" id="contat">
    
  <div class="col-sm-4">
      <figure>
        <a href=""><img src="images/img1.jpg" class="img-responsive rounded" style="width:100%" alt="Image"></a>
        <figcaption><p> <i class="bi bi-geo-alt"></i>  Endereço </p></figcaption>
    </figure>
    </div>
    
    <div class="col-sm-4">
      <figure>
        <a href=""><img src="images/img2.jpg" class="img-responsive rounded" style="width:100%" alt="Image"></a>
        <figcaption> <p> <i class="bi bi-envelope"></i> email@email.com </p></figcaption>
      </figure>
    
    </div>
    
    <div class="col-sm-4">
      <figure>
        <a href=""><img src="images/img3.jpg" class="img-responsive rounded" style="width:100%" alt="Image"></a>
        <figcaption><p>  <i class="bi bi-phone"></i> (90) 00000-0000  </p></figcaption>
      </figure>
    </div>
  </div>
  <br>
</div>  

<!-- FOOTER -->
  <footer class="container" >
    <p class="float-end"><a href="#">Ir para o topo</a></p>
    <p>&copy;2021 Allana TodaBella Multimarcas &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>


<style>
  .imgslide {
    width:100%;
    object-fit: cover;
    position: relative;
    filter: brightness(90%);
    
  }

  .carousel-caption {
    color: black;
    text-align: left;    
  }

  .lead {
    color: black;
    
  }

  .texto {
    text-align: left;
    height: 10px;
    margin-left: auto;
    margin: auto;
    color: #ff0014 ;
    text-shadow: 0px 0px 2px ;
  
  }
   

  figcaption {
    background-color: #dc3545 ;
    color: #fff;
    font: italic smaller sans-serif;
    padding: 3px;
    text-align: center;
    border: thin #c0c0c0 solid;
    font-size: 20px;
}
</style>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

   
    <script type="text/javascript" src="src/js/asb.js"></script>
    <!-- Opcional se quiser extender o suporte a browsers mais antigos -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2
      
  </body>
</html>