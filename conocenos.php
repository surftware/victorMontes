<!DOCTYPE html>
<html>

<?php	 
	$tituloPagina="Inicio | Víctor Montes y Asociados";
  include_once ("includes/head.php"); 	  
 ?>

<body>
  <?php
  /*define('BASE_PATH', '/var/www/vmyasc.com/');*/
  include_once ("includes/nav.php");	  
 ?>

  <div id="carouselConocenos" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/banner01.png" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <h1 class="h1-caption letra_res">Víctor Montes y Asociados</h1>
          <p class="p-caption letra_res">Con&oacute;cenos</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina banner-->
  <!-- Inicia Logros  -->
  <div class="section ptb-50" id="Logros">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="h1-section">Logros Destacados </h1>
          <p class="text-center">

          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina Logros  -->

  <!-- Inicia Tarjetas Equipo  -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="h1-section">Nuestro Equipo</h1>
          <p class="text-center">
            Conoce a nuestro quipo de Profesionistas, ellos estar&aacute;n para asesorarte
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 padding1">
          <div class="blog-grid">
            <div class="blog-grid-img position-relative"><img alt="img" src="img/cards/ab01.png"></div>
            <div class="blog-grid-text p-2 ">
              <h4 class=""><a href="javascript:void(0)">Results professional report</a></h4>
              <div class="meta mb-5">
                <ul>
                <li><a href="#"><i class="fas fa-calendar-alt "></i> 10 Aug, 2018</a></li>
                  <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 38</a></li>
                </ul>
              </div>
              <p>Achitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiavolupt assit aspernatur aut
                odit aut fugit, sed quia consequuntur magni.</p>
              <a href="javascript:void(0)" class="">Saber más.</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 padding1">
          <div class="blog-grid">
            <div class="blog-grid-img position-relative"><img alt="img" src="img/cards/ab03.png"></div>
            <div class="blog-grid-text p-2 ">
              <h4 class=""><a href="javascript:void(0)">Results professional report</a></h4>
              <div class="meta mb-5">
                <ul>
                  <li><a href="#"><i class="fas fa-calendar-alt "></i> 10 Aug, 2018</a></li>
                  <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 38</a></li>
                </ul>
              </div>
              <p>Achitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiavolupt assit aspernatur aut
                odit aut fugit, sed quia consequuntur magni.</p>
              <a href="javascript:void(0)" class="">Saber más.</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 padding1">
          <div class="blog-grid">
            <div class="blog-grid-img position-relative"><img alt="img" src="img/cards/ab04.png"></div>
            <div class="blog-grid-text p-2 ">
              <h4 class=""><a href="javascript:void(0)">Results professional report</a></h4>
              <div class="meta mb-5">
                <ul>
                  <li><a href="#"><i class="fas fa-calendar-alt "></i> 10 Aug, 2018</a></li>
                  <li><a href="#"><i class="fas fa-user"></i> User</a></li>
                  <li><a href="#"><i class="fas fa-comments"></i> 38</a></li>
                </ul>
              </div>
              <p>Achitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiavolupt assit aspernatur aut
                odit aut fugit, sed quia consequuntur magni.</p>
              <a href="javascript:void(0)" class="">Saber más.</a>
            </div>
          </div>
        </div>

      </div>
  </section>
  <!-- Termina Equipo de trabajo  -->
  <!-- Inicia Fechas Importantes -->
  <div class="section ptb-50" id="Fechas">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="h1-section">Fechas Importantes </h1>
          <p class="text-center">

          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina Fechas Importantes  -->




  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");  
  ?>

</body>

</html>