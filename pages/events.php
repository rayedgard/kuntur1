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
<link rel="stylesheet" href="../css/touchTouch.css" type="text/css" media="all" />
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

	<!--para los iconos de idioma-->    
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
		$boton="MORE INFO";
		$boton1="MORE";
		$reservas="RESERVE";
		//etiquetas
		$precio="Cost";
		//titulos
		$titulo1="ABOUT US";

		//footer
		$titulo2="About Eco Travel";
		$titulo3="Connect With Us";
		$titulo4="Extra Features";
		$titulo5="WELCOME TO KUNTUR TRAVEL AGENCY";
		$titulo6="Enjoy an unforgettable journey with our tours Cusco";
		$titulo7="Kuntur Travel is a travel agency that has been created by Mr. Victor Hugo Torres Saravia, who has over 12 years experience in tourism; during this time he has worked in prestigious tourist agencies, where he has served as Guide Selva (Tambopata National Reserve, Manu National Park, and others), adventure guide (Inca Trail, Machu Picchu, choquequirao, and others), guide Traditional (Cusco city as Sacred Valley Area, Tipon, Maras Moray and others), has exerted university teaching and conducted graduate studies in tourism.

The aim of Kuntur Travel, is to provide high quality tourism services very seriously and experience with ethical principles that ensure customer satisfaction, for which we maintain contacts with experimientados service providers (hotels, restaurants, mobility, experienced guides bilingual and other) local, regional and national level allowing us to offer high-level tour packages.";
		$titulo8="We offer walking tours, tours Machu Picchu and Cusco vacation travel";
		
	
	


	}
	if($i==0)
	{
		//botones
		$boton="MÁS INFO...";
		$boton1="MÁS";
		$reservas="RESERVAR";
		//etiquetas
		$precio="Costo";
			//titulos
		$titulo1="QUIENES SOMOS";
	
			//footer
		$titulo2="Acerca de Kuntur Travel";
		$titulo3="Redes Sociales";
		$titulo4="Caracteristicas Extras";
		$titulo5="BIENVENIDO A KUNTUR TRAVEL AGENCY";
		$titulo6="Disfruta de un viaje inolvidable con nuestros tours Cusco";
		$titulo7="Kuntur Travel es una agencia de turismo que ha sido creada por el Licenciado  Víctor Hugo Torres Saravia, quien cuenta con mas de 12 años de experiencia en la actividad turística; durante este tiempo ha trabajado en prestigiosas agencias de turismo, donde se ha desempeñado como: Guía de Selva (reserva nacional tambopata, parque nacional Manú, y otros), guía de aventura (camino inka, machupicchu, salkantay, choquequirao y otros), guía tradicional (Cusco ciudad y alrededores como Valle sagrado, Tipón, Maras Moray y otros) , ha ejercido docencia universitaria y realizado estudios de diplomado en turismo.

El objetivo de Kuntur Travel, es brindar servicios turísticos de alta calidad con mucha seriedad y experiencia, con principios éticos que garantizará la satisfacción de los usuarios, para lo cual mantenemos contactos con prestadores de servicios experimientados (hoteles, restaurantes, movilidad, guías con experiencia bilingüe y otros) a nivel local, regional y nacional lo que nos permite ofrecer paquetes turísticos de alto nivel.";
		$titulo8="Ofrecemos tours caminatas, tours Machu Picchu y viajes cusco vacaciones";

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
					<a href="../index.php&i=<?php echo $i;?>">
					<img src="../images/kuntur.png">

					</a>
				</div>
				<div class="header-bottom-right">
					<span class="menu">MENU</span>



			<?php  if($i=='1'){echo ' 	
							<ul class="nav1">
								<li ><a href="../index.php?i='.$i.'">HOME</a></li>
								<li class="cap"><a href="events.php?i='.$i.'">ABOUT US</a></li>
								<li><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="blog.php?i='.$i.'">PACKAGES</a></li>
								<li><a href="contact.php?i='.$i.'">CONTACTS</a></li>
                        	</ul>
							

                        	';}
                        	else
                        	{
                        		echo ' 	
							<ul class="nav1">
								<li ><a href="../index.php?i='.$i.'">INICIO</a></li>
								<li class="cap"><a href="events.php?i='.$i.'">QUIENES SOMOS</a></li>
								<li><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="blog.php?i='.$i.'">PAQUETES</a></li>
								<li><a href="contact.php?i='.$i.'">CONTACTOS</a></li>
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
<!-- events -->
	<div class="banner-bdy eve">
		<div class="container">
			<div class="events">
				<h3><?php echo $titulo1;?></h3>
				<p class="gal-txt">Nam libero tempore, cum soluta nobis est eligendi optio 
					cumque nihil impedit quo minus id quod maxime placeat facere possimus,
					omnis voluptas assumenda est, omnis dolor repellendus.</p>
				<div class="event-grids">
					
				
				<div class="featured-events">


					<h4><?php echo $titulo5;?></h4>
					<div class="col-md-8 featured-events-left">
						<h5><?php echo $titulo6;?> </br>
							<span><?php echo $titulo8;?></span></h5>
						<p style="text-align: justify;";><?php echo $titulo7;?>.</p>



						
					</div>
					<div class="col-md-4 featured-events-right">
						<img src="../administracion/imagenes/perfil/quienessomos.jpg" alt=" " />
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //events -->	
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