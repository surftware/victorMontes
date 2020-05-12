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


 $("form").submit(function () {
    alert("¡Su mensaje ha sido enviado!, Gracias por comunciarse con nosotros.");
});















