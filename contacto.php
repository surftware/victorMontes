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
  <!-- Inicia banner-->
  <div id="carouselContacto" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/carrusel/vmyasc-conocenos.png" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <h1 class="h1-caption letra_res">Víctor Montes y Asociados</h1>
          <p class="p-caption letra_res">Contacto</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina banner-->


  <!-- contacts area start -->
  <div class="section contacts ptb-50" id="contacts">
    <div class="container ">

      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12">
          <h1 class="h1-section text-center ">Formulario de Contacto</h1>
          <p class="text-center">Env&iacute;anos un mensaje, contestaremos a la brevedad.</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8">

          <form action="contacto.php" class="form form--contacts" method="post">
            <!-- inicia primer row de columnas-->
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <input type="text" class="form_field" placeholder="Nombre completo" required="" name="nombre">
              </div>
              <div class="col-sm-12 col-md-6">
                <input type="text" class="form_field" placeholder="D&eacute;jenos su tel&eacute;fono" required=""
                  name="telefono">
              </div>
            </div>
            <!-- termina primer row de columnas-->
            <!-- inicia segundo row de columnas-->
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <input type="text" class="form_field" placeholder="Correo electr&oacute;nico" required="" name="correo">
              </div>
              <div class="col-sm-12 col-md-12">
                <textarea class="form_textarea" placeholder="Escr&iacute;banos aqui su mensaje" required=""
                  name="mensaje"></textarea>
                <button class="button button_agua button_medium mb-5" type="submit">ENVIAR
                <span class="spinner-grow spinner-grow-sm"></span></button>
              </div>
            </div>
            <!-- termina segundo row de columnas-->
          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- contacts area end -->
  <?php

    $remitente = $_POST['correo'];
    $destinatario = 'vicmont@prodigy.net.mx'; // en esta línea va el mail del destinatario.
    $asunto = 'E-mail enviado desde la página web vmyasc.com.mx. Contestar a la brevedad.'; // acá se puede modificar el asunto del mail
    if (!$_POST)
    {      

    }
    else
    {        
      $cuerpo =  "Nombre:   " . $_POST["nombre"]    . "\r\n"; 
      $cuerpo .= "Teléfono: " . $_POST["telefono"]  . "\r\n";
      $cuerpo .= "Email:    " . $_POST["correo"]    . "\r\n";
      $cuerpo .= "Mensaje:  " . $_POST["mensaje"]   . "\r\n";

      //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir
      // con el "name" de cada campo del formulario.
	    // Si se agrega un campo al formulario, hay que agregarlo acá.

      $headers  = "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/plain; charset=utf-8\n";
      $headers .= "X-Priority: 3\n";
      $headers .= "X-MSMail-Priority: Normal\n";
      $headers .= "X-Mailer: php\n";
      $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

      mail($destinatario, $asunto, $cuerpo, $headers);        
      
    }
?>

  <!-- Inicia Mapa  -->
  <div class="section ptb-50" id="ubicacion">
    <div class="container justify-content-center">

      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h1 class="h1-section">Mapa de Ubicaci&oacute;n</h1>
          <p class="mb-0">
            Vis&iacute;tanos por primera vez, toda la informaci&oacute;n que necesites ser&aacute;
            brindada personalmente .
          </p>
          <p>Lunes a Viernes de: 10:00 am a 3:00 pm y 5:00 pm a 8:00 pm</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <iframe class="border rounded d-block mx-auto"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.553615587871!2d-99.17735778509469!3d19.34516698693408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffe44f731a01%3A0x5eba228778ee32ab!2sInterior%204%2C%20Kappa%2011%2C%20Romero%20de%20Terreros%2C%2004310%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1576175341286!5m2!1ses-419!2smx"
            width="1000" height="400" frameborder="0" style="border:0;" allowfullscreen="">
          </iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina Mapa  -->




  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");
  
  ?>

</body>

</html>