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
	<span class="ir-arriba fas fa-angle-up"></span>
 
  <div id="carouselConocenos" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/banner01.png" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <h1 class="h1-caption letra_res">V&iacute;ctor Montes y Asociados</h1>
          <p class="p-caption letra_res">Con&oacute;cenos</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina banner-->

  <!-- Inicia Tarjetas Equipo  -->
  <section id="Asociados">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="h1-section">Asociados</h1>
          <p class="text-center">
            Conoce a nuestro quipo de Profesionistas, ellos estar&aacute;n para asesorarte
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-12 ">
          <div class="blog-grid">
            <div class="blog-grid-img position-relative"><img alt="img" src="img/cards/ab01.png"></div>
            <div class="blog-grid-text p-2 ">
              <h4 class=""><a href="javascript:void(0)" class="texto_cards"> Resultadoss professional report</a></h4>
              <div class="meta mb-5">
                
                  <li class="punto "><a href="#" class="texto_cards"><i class="fas fa-calendar-alt "></i> 10 Aug, 2018</a></li>
                  <li class="user"><a href="#" class="texto_cards"><i class="fas fa-user"></i> User</a></li>
                  <li class="punto"><a href="#" class="texto_cards"><i class="fas fa-comments"></i> 38</a></li>
               
              </div>

              <p>Achitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiavolupt assit aspernatur aut
                odit aut fugit, sed quia consequuntur magni.</p>
                <input class="btn btn-primary" type="submit" value="Submit">
              <!--<a href="javascript:void(0)" class="">Saber más.</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 ">
          <div class="blog-grid">
            <div class="blog-grid-img position-relative"><img alt="img" src="img/cards/ab03.png"></div>
            <div class="blog-grid-text p-2 ">
              <h4 class=""><a href="javascript:void(0)" class="texto_cards">Results professional report</a></h4>
              <div class="meta mb-5">
                
                  <li class="punto"><a href="#" class="texto_cards"><i class="fas fa-calendar-alt "></i> 10 Aug, 2018</a></li>
                  <li class="user"><a href="#" class="texto_cards"><i class="fas fa-user"></i> User</a></li>
                  <li class="punto"><a href="#" class="texto_cards"><i class="fas fa-comments"></i> 38</a></li>
                
              </div>
              <p>Achitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiavolupt assit aspernatur aut
                odit aut fugit, sed quia consequuntur magni.</p>
                <input class="btn btn-primary" type="submit" value="Submit">
          <!--<a href="javascript:void(0)" class="">Saber más.</a>-->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 ">
          <div class="blog-grid">
            <div class="blog-grid-img position-relative"><img alt="img" src="img/cards/ab04.png"></div>
            <div class="blog-grid-text p-2 ">
              <h4 class=""><a href="javascript:void(0)" class="texto_cards">Results professional report</a></h4>
              <div class="meta mb-5">
                
                  <li class="punto"><a href="#" class="texto_cards"><i class="fas fa-calendar-alt "></i> 10 Aug, 2018</a></li>
                  <li class="user"><a href="#" class="texto_cards"><i class="fas fa-user"></i> User</a></li>
                  <li class="punto"><a href="#" class="texto_cards"><i class="fas fa-comments"></i> 38</a></li>
                
              </div>
              <p>Achitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quiavolupt assit aspernatur aut
                odit aut fugit, sed quia consequuntur magni.</p>
                <input class="btn btn-primary" type="submit" value="Submit">

            <!--<a href="javascript:void(0)" class="">Saber más.</a>-->
            </div>
          </div>
        </div>

      </div>
  </section>
  <!-- Termina Equipo de trabajo  -->
  
  <!-- Inicia Logros Destacados -->
  <div class="section ptb-50" id="Logros Destacados">
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
  <!-- Termina Logros Destacados  -->


  <!-- Inicia Despachos Filiales  -->
  <div class="section ptb-50" id="Despachos">
    <div class="container ">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="h1-section">Despachos Filiales </h1>
          <p class="text-center">

          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina Despachos Filiales  -->
   <!-- SCROLL TO TOP -->
   <div class="scrollup">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
   
    <!-- SCROLL TO TOP ENDS -->




  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");  
  ?>

</body>

</html>