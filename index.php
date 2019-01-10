<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comunidade Biorganica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- jQuery lib -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--website css-->
  <link rel="stylesheet" href="style/website.css" />
</head>
<body>

<?php include "comum/menu-site.php"; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagens/cursos.jpg" alt="cursos" style="width: 100%; height: 400px;" />
        <div class="carousel-caption">
          <h3>Conheça nossos cursos</h3>
          <p><a href="#">Saiba mais</a></p>
        </div>
      </div>

      <div class="item">
        <img src="imagens/projetos.jpg" alt="projetos" style="width: 100%; height: 400px;" />
        <div class="carousel-caption">
          <h3>Conheça nossos projetos</h3>
          <p><a href="#">Saiba mais</a></p>
        </div>
      </div>

      <div class="item">
        <img src="imagens/eventos.jpg" alt="eventos" style="width: 100%; height: 400px;" />
        <div class="carousel-caption">
          <h3>Próximos Eventos</h3>
          <p><a href="#">Saiba mais</a></p>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
</div>

<div class="container-fluid text-center">
  <h3>Nossos Projetos</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="imagens/cogumelo.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Biorgânico</p>
    </div>
    <div class="col-sm-4">
      <img src="imagens/floresta.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Agrofloresta</p>
    </div>
    <div class="col-sm-4">
      <img src="imagens/frutas-nativas.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Frutas Nativas</p>
    </div>
  </div>
</div>

<div class="container-fluid text-center">
  <h3>Cursos</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=APICULTURA" class="img-responsive" style="width:100%" alt="Image">
      <p>Apicultura</p>
    </div>
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=CONSTRUÇÃO" class="img-responsive" style="width:100%" alt="Image">
      <p>Construção</p>
    </div>
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=CULINÁRIA" class="img-responsive" style="width:100%" alt="Image">
      <p>Culinária</p>
    </div>
  </div>
</div>

<div class="container-fluid text-center">
  <h3>Práticas</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=MULTIRÕES" class="img-responsive" style="width:100%" alt="Image">
      <p>Multirões</p>
    </div>
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=PESQUISA" class="img-responsive" style="width:100%" alt="Image">
      <p>Pesquisa</p>
    </div>
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=VIVÊNCIAS" class="img-responsive" style="width:100%" alt="Image">
      <p>Vivências</p>
    </div>
  </div>
</div>

<?php include "comum/footer-main.php"; ?>

</body>
</html>
