<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Eco Travel a Travel Agency Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="js/jquery.min.js"></script>
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>




<!-------------codigo php and mysql--------------->



  
    <!-- coneccion php -->
    <?php 
	include_once("conexion.php");
	$link = Conectarse();
	
	//conulta 
	$consultaPaquetes ="SELECT paquetes.idPaquete, paquetes.nombrePaquete, banner.imagen, paquetes.costo FROM  banner, paquetes WHERE paquetes.eliminar='0' AND banner.idPaquete = paquetes.idPaquete ORDER BY paquetes.idPaquete DESC LIMIT 3"; 
$paquetes = mysql_query($consultaPaquetes,$link);

	//nombre del titulo
	$idPaquete=array();
	$nombrePaquete=array();
	$imagen=array();
	$costo=array();

while($row2 = mysql_fetch_array($paquetes))
		{
		array_push($idPaquete,$row2[0]);
		array_push($nombrePaquete,$row2[1]);
		array_push($imagen,$row2[2]);
		array_push($costo,$row2[3]);
		}
	
	//------------------------
	//conuslta para paquetes aleatorios
	$paquetesAleatorios ="SELECT idPaquete, nombrePaquete, imagen, costo FROM `paquetes` WHERE eliminar='0'  ORDER BY RAND() LIMIT 3"; 
$paquetesAle = mysql_query($paquetesAleatorios,$link);
	
		//nombre del titulo
	$idPaqueteAl=array();
	$nombrePaqueteAl=array();
	$imagenAl=array();
	$costoAl=array();

while($row2 = mysql_fetch_array($paquetesAle))
		{
		array_push($idPaqueteAl,$row2[0]);
		array_push($nombrePaqueteAl,$row2[1]);
		array_push($imagenAl,$row2[2]);
		array_push($costoAl,$row2[3]);
		}	

//conuslta para los dos ultimos paquetes
	$paquetesFinales ="SELECT idPaquete, nombrePaquete, imagen, costo, descripcion FROM `paquetes` WHERE eliminar='0'  ORDER BY fechaPublicacion desc LIMIT 2"; 
$paquetesFin = mysql_query($paquetesFinales,$link);
	
		//nombre del titulo
	$idPaqueteFin=array();
	$nombrePaqueteFin=array();
	$imagenFin=array();
	$costoFin=array();
	$descripcionFin= array();

while($row2 = mysql_fetch_array($paquetesFin))
		{
		array_push($idPaqueteFin,$row2[0]);
		array_push($nombrePaqueteFin,$row2[1]);
		array_push($imagenFin,$row2[2]);
		array_push($costoFin,$row2[3]);
		array_push($descripcionFin, $row2[4]);
		}

	//linea de codigo para almacenar los tipos de trancsicion de los paquetes
	$transicion =array();
	$transicion[0] = "banner wow fadeInUpBig animated";
	$transicion[1] = "banner wow fadeInDownBig animated";
	$transicion[2] = "banner wow bounceInLeft animated";
	$transicion[3] = "banner wow bounceInRight animated";
	//fin transiciones

	?>



<!-----------fin php and mysql--------->













<!-- banner -->
	<div >
	<!--carga el video de fondo-->
	 <iframe id="video-background" width="560" height="315" src="//www.youtube.com/embed/KdEdI40iOwU?time=1m20s&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;html5=1&amp;allowfullscreen=true&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>
    <!--fin video de fondo--> 
			

		<div class="container">
<!-- header -->	
		<div class="header">
			
			<div class="clearfix"> </div>
			<div class="header-bottom">
				<div class="header-bottom-left">
					<a href="index.php">
					<img src="images/kuntur.png">

					</a>
				</div>
				<div class="header-bottom-right">
					<span class="menu">MENU</span>
					<ul class="nav1">
						<li class="cap"><a href="index.php">INICIO</a></li>						
						<li><a href="pages/events.php">QUIENES SOMOS</a></li>						
						<li><a href="pages/gallery.php">MULTIMEDIA</a></li>
						<li><a href="pages/blog.php">PAQUETES</a></li>
						<li><a href="pages/contact.php">CONTACTOS</a></li>
					</ul>	
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
<!-- //header -->

<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner">	
							<div class="jumbotron banner-info">
								<h1>Sit Voluptatem</h1>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
									accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
									quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
									sunt explicabo accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
									quae ab illo inventore veritatis et quasi architecto beatae.</p>
								<p><a class="btn btn-primary btn-lg" href="pages/paquetes/paquete.php" role="button">LEER MÁS</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner1">	
							<div class="jumbotron banner-info">
								<h1>Quasi Architecto Beatae</h1>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
									accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
									quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
									sunt explicabo accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
									quae ab illo inventore veritatis et quasi architecto beatae.</p>
								<p><a class="btn btn-primary btn-lg" href="pages/paquetes/paquete.php" role="button">LEER MÁS</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner2">	
							<div class="jumbotron banner-info">
								<h1>Beatae Vitae Dicta</h1>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
									accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
									quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
									sunt explicabo accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
									quae ab illo inventore veritatis et quasi architecto beatae.</p>
								<p><a class="btn btn-primary btn-lg" href="pages/paquetes/paquete.php" role="button">LEER MÁS</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
	</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bdy">
		<div class="container">
	<div class="banner-bottom" id="events">
			<div class="banner-bottom-grids">
				

			  <?php
			  for($k=0;$k<count($idPaqueteAl);$k++)
			  {
			   ?>

				<div class="col-md-4 banner-bottom-grid">
					<img src="administracion/imagenes/paquetes/<?php echo $imagenAl[$k];?>" alt="">

					<div class="more">
				
						<a href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$k];?>">MÁS</a>
					</div>
				</div>

				<?php  } ?>


				<div class="clearfix"> </div>

			</div>
			<div class="features">
				<div class="col-md-9 features-left">
					
					<!-- titulo -->
					<h3> PAQUETES</h3>




 			  <?php
			  for($l=0;$l<count($idPaqueteAl);$l++)
			  {
			   ?>

					<div class="features-left-grids">
						<div class="col-md-4 features-left-grid">
							<a href="pages/paquetes/paquete.php">
								
								<img src="administracion/imagenes/paquetes/<?php echo $imagenAl[$l];?>" alt="">

							</a>
						</div>
						<div class="col-md-8 jumbotron features-left-grid1">
							<h4><a href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$k];?>"><?php echo $nombrePaqueteAl[$l];?></a></h4>
							<p>
								
								<?php echo  strip_tags($descripcionFin[$l]);?>
							</p>
							<p><a class="btn read btn-primary btn-lg" href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$l];?>" role="button">Leer Más</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>


				<?php  } ?>



			




				</div>




				<div class="col-md-3 features-right">
					<div class="features-rgt">
						<h3>Upcoming Events</h3>
						<div class="features-rgt-grid">
							<div class="features-rgt-grid-left">
								<h4><a href="single.html">Culpa Qui Officia</a></h4>
								<p>cupiditate non provident</p>
								<a href="pages/paquetes/paquete.php">More Info</a>
							</div>
							<div class="features-rgt-grid-right">
								<p>15th May</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="features-rgt-grid">
							<div class="features-rgt-grid-left">
								<h4><a href="pages/paquetes/paquete.php">Culpa Qui Officia</a></h4>
								<p>cupiditate non provident</p>
								<a href="single.html">More Info</a>
							</div>
							<div class="features-rgt-grid-right">
								<p>15th May</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="features-rgt-grid">
							<div class="features-rgt-grid-left">
								<h4><a href="single.html">Culpa Qui Officia</a></h4>
								<p>cupiditate non provident</p>
								<a href="pages/paquetes/paquete.php">More Info</a>
							</div>
							<div class="features-rgt-grid-right">
								<p>15th May</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="all-events">
							<a href="pages/paquetes/paquete.php">All Events</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //banner-bottom -->
<!-- slider -->
	<div class="sliderfig">
		<ul id="flexiselDemo1">			
			<li>
				<div class="sliderfig-grids">
					<div class="sliderfig-grid">
						<img src="images/4.jpg" alt=" " />
						<div class="slider-text">
							<p>Et Quas Molestias Officia</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="sliderfig-grids">
					<div class="sliderfig-grid">
						<img src="images/5.jpg" alt=" " />
						<div class="slider-text">
							<p>Et Quas Molestias Officia</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="sliderfig-grids">
					<div class="sliderfig-grid">
						<img src="images/6.jpg" alt=" " />
						<div class="slider-text">
							<p>Et Quas Molestias Officia</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="sliderfig-grids">
					<div class="sliderfig-grid">
						<img src="images/7.jpg" alt=" " />
						<div class="slider-text">
							<p>Et Quas Molestias Officia</p>
						</div>
					</div>
				</div>
			</li>
			</ul>
			<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
	</div>
	</div>
<!-- //slider -->
<!-- footer -->
	<div class="footer-top">
	<div class="container">
		<div class="footer-top-grids">
			<div class="col-md-4 footer-top-grid">
				<h3>Acerca de Kuntur Travel</h3>
				<p>"At vero eos et accusamus et iusto odio dignissimos ducimus 
				qui blanditiis praesentium voluptatum deleniti atque corrupti quos 
				dolores et quas molestias excepturi sint occaecati cupiditate non 
				provident, similique sunt in culpa qui officia deserunt mollitia animi, 
				id est laborum et dolorum fuga. </p>
				<div class="read1">
					<a href="paquetes/paquete.php">Leer Más</a>
				</div>
			</div>
			<div class="col-md-4 footer-top-grid">
				<h3>Redes Sociales</h3>
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
				<h3>Caracteristicas Extras</h3>
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