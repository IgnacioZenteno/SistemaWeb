<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>¿Quienes Somos?</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Esta parte nos permite que al momento de achicar la pantalla o abrir la pagina de un celular se vea igual de bien las imagenes -->
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
    <!-- Css ~Me permite darle forma y manejar mejor su posición~ -->
    <link href="css/style.css" rel="stylesheet"  type="text/css">
    <link href="css/quienes_somos.css" rel="stylesheet"  type="text/css">
  </head>

  <body class="bg-light">
    <?php include_once "include/header.php"; ?>

    <main>
      <?php include_once "include/carousel.php"; ?>
   
      <div class="container marketing">     
        
      <!-- START THE FEATURETTES -->
        <div class="row featurette ">
          <div class="col-md-7 bg-white rounded border">
            <h2 class="featurette-heading mb-5">SOBRE NOSOTROS</h2>
            <p class=" lead text-justify">[INSERTE NOMBRE DE LA PAGINA] nace en 2021 y desde su inicio se ha insertado en la memoria de todo viajero nacional que desee conocer la región de Atacama. A través de nuestras Redes Sociales (Facebook, Twitter, Instagram y Youtube) se ha generado una gran comunidad atenta a nuestras publicaciones, actividades y formatos que diariamente mostramos para mantener informados a nuestros seguidores, quienes interactúan, participan y reconocen nuestro trabajo.En nuestro sitio podrás encontrar noticias, entrevistas, vivenciales, reportajes e imperdibles sobre temáticas turísticas, entre mucha otra información turística que acerque a nuestros usuarios planificar sus viajes por Chile.</p>
          </div>
          <div class="col-md-5"> 
            <img src="img/paisajes/flamenco.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="500" role="img">
          </div>
        </div>
         <hr class="featurette-divider">
        <div class="row">
          <h1 class="h1 mb-5" style="text-align: center;">NUESTRO STAFF</h1>
          <div class="col-lg-3">
            <svg class="bd-placeholder-img rounded-circle border border-2 border-dark" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <h2>Franz Oppliger</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
            <svg class="bd-placeholder-img rounded-circle border border-2 border-dark" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <h2>Yerko Arbarza</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
            <svg class="bd-placeholder-img rounded-circle border border-2 border-dark" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
            <h2>Gaspar Araya</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3">
            <img src="img/developers/zenteno.jpg" class="bd-placeholder-img rounded-circle border border-2 border-dark" width="144" height="144" role="img">
            <h2>Ignacio Zenteno</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <hr class="featurette-divider">
        <div class="row featurette ">
          <div class="col-md-7 order-md-2 bg-white rounded border">
            <h2 class="featurette-heading mb-5">Donde Puedes Encontrarnos</h2>
            <p class="lead text-justify">Nuestra sucursal se encuentra en <strong>[Inserte Calle X]</strong></p>
          </div>
          <div class="col-md-5 order-md-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.7919852692258!2d-70.32595850044716!3d-27.370470068304908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x969805f7c70f09cb%3A0xac6698478c66c1eb!2sUnimarc!5e0!3m2!1ses!2scl!4v1633403969334!5m2!1ses!2scl" width="420" height="450"  allowfullscreen="" loading="lazy" class="border border-dark"></iframe>
          </div>
        </div>

       
      </div><!-- /.container -->

      <hr class="featurette-divider">


    <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>      
  </body>
</html>
