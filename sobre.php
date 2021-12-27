<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>

    <!--links-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    
</head>
<body class="teste">
    <!-- barra de navegacao -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"> Sobre </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="painel.php">VOLTAR</a></li>
        </ul>
    </div>
  </div>
</nav>



<div>
        <h1 class="titulo">Tudo sobre nossa loja aqui</h1>
        <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut molestiae voluptatem omnis, nobis error quam similique accusantium recusandae dolores unde ratione veniam? Dolor, quidem culpa atque quod explicabo quaerat dolore! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et earum ipsam quod voluptatum eos perspiciatis exercitationem dolores accusantium officiis reiciendis! Aperiam quisquam voluptatem quidem velit nihil in sit laboriosam facilis?</p>
    </div>





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
  
    
</body>
</html>


<style>
    .teste {
        text-align: center;
        background-color:#dc3546dc ;
     
    }

    .texto {
        
        font-size: 20px;
        text-align: center;
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