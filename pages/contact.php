<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KUNTUR TRAVEL AGENCY</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="../js/jquery.min.js"></script>
<!-- //js -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eco Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- pop-up -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>
<!-- pop-up -->
</head>
	
<body>
  <a class='flotanteE' href='../index.php?i=0' ><img src='../images/esp.png' border="0"/></a>
    <a class='flotanteI' href='../index.php?i=1' ><img src='../images/ing.png' border="0"/></a>
	<!--fin idioma-->
<?php 


include_once("../conexion.php");
	$link = Conectarse();

	//Codigo para discriminar el idioma

	if( $_GET['i']=='' or $_GET['i']=='1')
	{
		$i='1';
	}
	else
	{
		$i='0';
	}

	
	if($i==1)
	{
		//botones
		$boton="READ MORE";
	
		
		//descripcion
		$descripcion="Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.";
		//titulos
		$titulo1="CONTACTS";

		//footer
		$titulo2="About Eco Travel";
		$titulo3="Connect With Us";
		$titulo4="Extra Features";

		$formulario1="CONTACT INFO";
		$formulario2="Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.";
		$formulario3="Address";
		$formulario4="Telephone";
		$formulario5="Email";
		$formulario6="Example";
		$formulario7="CONTACT FORM";
		$formulario8="Name";		
		$formulario9="Message...";
		$formulario10="Submit";
	

	}
	if($i==0)
	{
		//botones
		$boton="LEER MÁS";
		
	
		//descripcion
		$descripcion="cuando nuestro poder de elección es sin trabas y cuando nada impide que seamos capaces de hacer lo que es más agradable a, todo placer es de agradecer y cada dolor evitado.";
			//titulos
			//
		$titulo1="CONTACTOS";

		//formulario
		$formulario1="INFORMACIÓN DEL CONTACTO";
		$formulario2="cuando nuestro poder de elección es sin trabas y cuando nada impide que seamos capaces de hacer lo que es más agradable a, todo placer es de agradecer y cada dolor evitado..";
		$formulario3="Dirección";
		$formulario4="Teléfono";
		$formulario5="correo";
		$formulario6="ejemplo";
		$formulario7="FORMULARIO";
		$formulario8="Nombre";		
		$formulario9="Mensaje";
		$formulario10="Enviar";



		
	
			//footer
		$titulo2="Acerca de Kuntur Travel";
		$titulo3="Redes Sociales";
		$titulo4="Caracteristicas Extras";


	}
	//fin discriminacion de idiom
?>
<div class="banner-with-text1">
	<div class="container">
<!-- header -->	
		<div class="header">
			
			<div class="clearfix"> </div>
			<div class="header-bottom">
				<div class="header-bottom-left">
					<a href="../index.html">
					<img src="../images/kuntur.png">

					</a>
				</div>
				<div class="header-bottom-right">
					<span class="menu">MENU</span>
					<?php  if($i=='1'){echo ' 	
							<ul class="nav1">
								<li ><a href="../index.php?i='.$i.'">HOME</a></li>
								<li><a href="events.php?i='.$i.'">ABOUT US</a></li>
								<li><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li ><a href="blog.php?i='.$i.'">PACKAGES</a></li>
								<li class="cap"><a href="contact.php?i='.$i.'">CONTACTS</a></li>
                        	</ul>
                        	';}
                        	else
                        	{
                        		echo ' 	
							<ul class="nav1">
								<li ><a href="../index.php?i='.$i.'">INICIO</a></li>
								<li><a href="events.php?i='.$i.'">QUIENES SOMOS</a></li>
								<li><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li ><a href="blog.php?i='.$i.'">PAQUETES</a></li>
								<li class="cap"><a href="contact.php?i='.$i.'">CONTACTOS</a></li>
                        	</ul>
                        	';}
                        	?>
					<!-- script for menu -->
						<script> 
							$( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							 // Animation complete.
							});
							});
						</script>
					<!-- //script for menu -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>	
	</div>
</div>
<!-- //header -->
<!-- contact -->
	<div class="banner-bdy con">
		<div class="container">
			<div class="contact">
				<div class="map">
					<h3><?php echo $titulo1;?></h3>
					<p class="gal-txt"><?php echo $descripcion;?>.</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2040611.236592339!2d-56.9479281!3d-2.6446517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926eca1645365b6b%3A0xabfc431d20b2b474!2sAmazon+River%2C+Brazil!5e0!3m2!1sen!2sin!4v1432120609770" frameborder="0" style="border:0"></iframe>
				</div>
				<div class="contact-form">
					<div class="col-md-4 contact-form-left">
						<h4><?php echo $formulario1;?></h4>
						<p><?php echo $formulario2;?>.</p>
						<h5><?php echo $formulario3;?>:</h5>
						<p>Eiusmod Tempor inc</p>
						<p>9560 St Dolore Place,</p>
						<p><?php echo $formulario4;?>: +1 800 603 6035</p>
						<p>FAX: +1 800 889 9898</p>
						<a href="mailto:example@email.com"><?php echo $formulario5;?>@<?php echo $formulario6;?>.com</a>
					</div>
					<div class="col-md-8 contact-form-right">
						<h4><?php echo $formulario7;?></h4>
						
						<form>
							<input type="text" value="<?php echo $formulario8;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="<?php echo $formulario5;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" value="<?php echo $formulario4;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
							<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="<?php echo $formulario10;?>" >
						</form>
				


					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
<!-- //contact -->				
<!-- footer -->
	<div class="footer-top">
	<div class="container">
		<div class="footer-top-grids">
			<div class="col-md-4 footer-top-grid">
				<h3><?php echo $titulo2; ?></h3>
				<p>"At vero eos et accusamus et iusto odio dignissimos ducimus 
				qui blanditiis praesentium voluptatum deleniti atque corrupti quos 
				dolores et quas molestias excepturi sint occaecati cupiditate non 
				provident, similique sunt in culpa qui officia deserunt mollitia animi, 
				id est laborum et dolorum fuga. </p>
				<div class="read1">
					<a href="paquetes/paquete.php&i=<?php echo $i;?>" ><?php echo $boton; ?></a>
				</div>
			</div>
			<div class="col-md-4 footer-top-grid">
				<h3><?php echo $titulo3; ?></h3>
				<div class="twi-txt">
					<div class="twi">
						<a href="#" class="twitter"></a>
					</div>
					<div class="twi-text">
						<p><a href="#">Follow Us On Twitter</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="twi-txt1">
					<div class="twi">
						<a href="#" class="flickr"> </a>
					</div>
					<div class="twi-text">
						<p><a href="#">Check Us Out On Flickr</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="twi-txt1">
					<div class="twi">
						<a href="#" class="facebook"> </a>
					</div>
					<div class="twi-text">
						<p><a href="#">Become a Fan On Facebook</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 footer-top-grid">
				<h3><?php echo $titulo4; ?></h3>
				<ul class="last">
					<li><a href="#">Temporibus autem quibusdam</a></li>
					<li><a href="#">Et aut officiis debitis aut</a></li>
					<li><a href="#">Necessitatibus saepe eveniet</a></li>
					<li><a href="#">Ut et voluptates repudiandae</a></li>
					<li><a href="#">Molestiae non recusandae earum</a></li> 
					<li><a href="#">Rerum hic tenetur a sapiente delectus</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		<div class="footer">
			<p>Copyright © 2015 Eco Travel. All Rights Reserved | Design by<a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
<!-- //footer -->	
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>