 <!-- jquery -->
 <script src="js/jquery.min.js" async></script>

  <!-- owl carousel -->
  <script src="js/owl.carousel.min.js"></script>
 
 <!-- custom script -->
 <script src="js/myscript.js"></script>




 <!-- wow -->
 <script src="js/wow.min.js" async></script>

 <!-- bootstrap js-->
 <script src="js/bootstrap.min.js" async></script>

 <!-- font awesome-->
 <script src="fontawesome/js/all.min.js" async></script>

 <!-- sweetalert2-->
 <script src="js/sweetalert2.js" async></script>
 
 <!-- recaptcha-->
 <script src='https://www.google.com/recaptcha/api.js' async></script>

 <script type="text/javascript" charset="utf-8"></script>

 <script>

$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

});

 </script>
 <script>

	new WOW().init();

	</script>