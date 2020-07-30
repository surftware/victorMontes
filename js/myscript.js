$(document).ready(function(){

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })  

 }); 


$( "#post" ).click(function() {

    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);
    formData.append('captcha',grecaptcha.getResponse());
    $.ajax({
        url: "includes/validacion.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (alerta) { 
            alerta = $.parseJSON(alerta);
            console.log(alerta);
            Swal.fire(
            alerta['acceso'],
            alerta['mensaje'],
            alerta['tipoAlerta']
            )
            if (alerta['tipoAlerta'] === "success") {
                document.getElementById("myForm").reset();    
            }
            $submitButton = document.getElementById("post").value;
        }
    });
    
});

function validaNumericos(event) {
if(event.charCode >= 48 && event.charCode <= 57){
    return true;
}
return false;        
}

function validarArchivo(obj){
var uploadFile = obj.files[0];
var inputImage;

if (!window.FileReader) {
    Swal.fire(
            'Archivo Incorrecto!',
            'El navegador no soporta la lectura de archivos',
            'warning'
    ); 
    inputImage.value = '';
    return;
    inputImage = document.getElementById("adjunto");
}
if (!(/\.(jpg|jpeg|png|pdf|docx|doc|xlsx|xls)$/i).test(uploadFile.name)) {
    var alertMensaje='El archivo a adjuntar no es una imagen o archivo <br>'+
    'Los formatos apropiados son:<br/>'+
    '-jpg\n'+
    '-jpeg\n'+
    '-pdf\n'+
    '-docx\n'+
    '-doc\n'+
    '-xlsx\n'+
    '-xls'
    ;
    Swal.fire(
            'Archivo Incorrecto!',
            alertMensaje,
            'warning'
    );  
    inputImage = document.getElementById("adjunto");
    inputImage.value = '';
}
else 
{
    var img = new Image();
    img.onload = function () {
        
        if (uploadFile.size > 1536000)
        {   
            Swal.fire(
            'Archivo Incorrecto!',
            'El peso del archivo no puede exceder los 15360kb o 15mb',
            'warning'
            );  
            inputImage = document.getElementById("adjunto");
            inputImage.value = '';
        }
        else {
            Swal.fire(
            'Archivo Correcto!',
            'El archivo es valido para enviarse',
            'success'
            );             
        }
    };
    img.src = URL.createObjectURL(uploadFile);
}                 
}

/*---------------------------------------
  Scrollup
-----------------------------------------*/

function initScrollTop() {
    $(window).on("scroll", function () {
  
      if ($(this).scrollTop() > 100) {
  
        $('.scrollup').fadeIn();
  
      } else {
  
        $('.scrollup').fadeOut();
  
      }
  
    });
  
    $('.scrollup').on('click', function () {
  
      $('html, body').animate({ scrollTop: 0 }, 800);
  
      return false;
  
    });
  
  } // initScrollTop