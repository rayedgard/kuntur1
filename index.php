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
	$paquetesAleatorios ="SELECT idPaquete, nombrePaquete, imagen, costo FROM `paquetes` WHERE eliminar='0' AND idioma='$i' ORDER BY RAND() LIMIT 3"; 
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
	$paquetesFinales ="SELECT idPaquete, nombrePaquete, imagen, costo, descripcion FROM `paquetes` WHERE eliminar='0' AND idioma='$i' ORDER BY fechaPublicacion desc LIMIT 2"; 
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
	
	//conuslta para eventos
$consultaEventos ="SELECT id,nombre,descripcion,MONTHNAME(fecha),DAY(fecha) FROM eventos WHERE eliminar='0' AND idioma='$i'  ORDER BY id ASC LIMIT 3"; 
$eventos = mysql_query($consultaEventos,$link);
	
		//nombre del titulo
	$idEvento=array();
	$nombreEvento=array();
	$descEvento=array();
	$mes=array();
	$dia=array();

while($row2 = mysql_fetch_array($eventos))
		{
			array_push($idEvento,$row2[0]);
			array_push($nombreEvento,$row2[1]);
			array_push($descEvento,$row2[2]);
			array_push($mes,$row2[3]);
			array_push($dia,$row2[4]);
		}	
?>
	<!--para los iconos de idioma-->    
    <a class='flotanteE' href='index.php?i=0' ><img src='images/esp.png' border="0"/></a>
    <a class='flotanteI' href='index.php?i=1' ><img src='images/ing.png' border="0"/></a>
	<!--fin idioma-->

<?php 

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
		$boton1="MORE";
		$reservas="RESERVE";
		//etiquetas
		$precio="Cost";
		//titulos
		$titulo1="PACKAGES";

		//footer
		$titulo2="About Eco Travel";
		$titulo3="Connect With Us";
		$titulo4="Extra Features";
		$titulo5="PACKAGES";
		$titulo6="more info";
		$titulo7="Upcoming Events";
		
	
	


	}
	if($i==0)
	{
		//botones
		$boton="LEER MÁS";
		$boton1="MÁS";
		$reservas="RESERVAR";
		//etiquetas
		$precio="Costo";
			//titulos
		$titulo1="PAQUETES";
	
			//footer
		$titulo2="Acerca de Kuntur Travel";
		$titulo3="Redes Sociales";
		$titulo4="Caracteristicas Extras";
		$titulo5="PACKAGES";
		$titulo6="más info";
		$titulo7="Próximos Eventos";

	}
	//fin discriminacion de idiom
?>




<!-- banner -->
	<div  >
	
	<!--carga el video de fondo-->
	 <iframe id="video-background" width="560" height="315" src="//youtube.com/embed/KdEdI40iOwU?autoplay=1" frameborder="0" allowfullscreen></iframe>
    <!--fin video de fondo--> 
			

		<div class="container" >
<!-- header -->	
		<div class="header" >
			<div class="header-top" >
				
			</div>
			
			<div class="clearfix"> </div>
			<div class="header-bottom">

				<div class="header-bottom-left">
					<a href="index.php&i=<?php echo $i;?>">
					<img src="images/kuntur.png">
					</a>					
				</div>


				<div class="header-bottom-right">
					<span class="menu">MENU</span>

						<?php  if($i=='1'){echo ' 	
							<ul class="nav1">
								<li  class="cap"><a href="index.php?i='.$i.'">HOME</a></li>
								<li><a href="pages/events.php?i='.$i.'">ABOUT US</a></li>
								<li ><a href="pages/gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="pages/blog.php?i='.$i.'">PACKAGES</a></li>
								<li><a href="pages/contact.php?i='.$i.'">CONTACTS</a></li>
                        	</ul>
                        	';}
                        	else
                        	{
                        		echo ' 	
							<ul class="nav1">
								<li class="cap" ><a href="index.php?i='.$i.'">INICIO</a></li>
								<li><a href="pages/events.php?i='.$i.'">QUIENES SOMOS</a></li>
								<li ><a href="pages/gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="pages/blog.php?i='.$i.'">PAQUETES</a></li>
								<li><a href="pages/contact.php?i='.$i.'">CONTACTOS</a></li>
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
								<p><a class="btn btn-primary btn-lg" href="index.php" role="button"><?php echo $boton;?></a></p>
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
								<p><a class="btn btn-primary btn-lg" href="index.php" role="button"><?php echo $boton;?></a></p>
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
								<p><a class="btn btn-primary btn-lg" href="index.php" role="button"><?php echo $boton;?></a></p>
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
					<img src="administracion/imagenes/paquetes/<?php echo $imagenAl[$k];?>" alt="" >

					<div class="more">
				
						<a href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$k];?>&i=<?php echo $i;?>"><?php echo $boton1;?></a>
					</div>
				</div>

				<?php  } ?>


				<div class="clearfix"> </div>

			</div>
			<div class="features">
				<div class="col-md-9 features-left">
					
					<!-- titulo -->
					<h3> <?php echo $titulo1;?></h3>




 			  <?php
			  for($l=0;$l<2;$l++)
			  {
			   ?>

					<div class="features-left-grids">
						<div class="col-md-4 features-left-grid">
							<a href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$l];?>&i=<?php echo $i;?>">
								
								<img src="administracion/imagenes/paquetes/<?php echo $imagenAl[$l];?>" alt="" style="max-height: 150px" >

							</a>
						</div>

						<div class="col-md-8 jumbotron features-left-grid1">
							<h4><a href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$l];?>&i=<?php echo $i;?>" ><?php echo $nombrePaqueteAl[$l];?></a></h4>
							<p style="align:justify">
								
								<?php echo  substr(strip_tags($descripcionFin[$l]),0,200)."..."; ?>
							</p>

							<p>
							<a class="btn read btn-primary btn-lg" href="pages/paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$l];?>&i=<?php echo $i;?>"  role="button"><?php echo $boton; ?></a>
							</p>

						</div>

						<div class="clearfix"> </div>
					</div>


				<?php  } ?>


				</div>











				



				<div class="col-md-3 features-right">
					<div class="features-rgt">
						<h3><?php echo $titulo7; ?></h3>

						<?php
					  for($k=0;$k<count($idEvento);$k++)
						  {
					   ?>

						<div class="features-rgt-grid">

							<div class="features-rgt-grid-left">
								<h4><a href="javascript:Abrir_ventana('pages/eventos.php?id=<?php echo $idEvento[$k];?>&i=<?php echo $i;?>')"><?php echo $nombreEvento[$k];?></a></h4>
								<p><?php echo substr( strip_tags($descEvento[$k]) ,0,90)."...";?></p>

								  <a href="javascript:Abrir_ventana('pages/eventos.php?id=<?php echo $idEvento[$k];?>&i=<?php echo $i;?>')" title="Asignación de Destinos a Paquetes"><?php echo $titulo6;?></a>

							</div>
							<div class="features-rgt-grid-right">
								<p style="text-align:center"><?php echo $dia[$k];?>
								<?php echo substr($mes[$k],0,3);?></p>
							</div>
							<div class="clearfix"> </div>

						</div>

						<?php 
						}?>

					<!--	<div class="all-events">
							<a href="pages/paquetes/paquete.php&i=<?php echo $i;?>" >All Events</a>
						</div>-->

					</div>
				</div>

<!-- el pop up -->



<script language="JavaScript" type="text/javascript">
<!--
function Abrir_ventana(pagina){
var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=800, height=500, top=100, left=300";
window.open(pagina,"",opciones);
}
//-->
</script>


				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //banner-bottom -->
   
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>


     
     
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
		</script>
		
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->



<!-- slider -->
	<div class="sliderfig">
		<ul id="flexiselDemo1">	

			<?php
			$consulta3="SELECT nombre, linkvideo FROM video WHERE eliminar=0 ORDER BY id DESC LIMIT 3"; 
			$resultado3 = mysql_query($consulta3,$link);


			//nombre del titulo
			$titulo3=array();
			$link3=array();
	
			while($row3=  mysql_fetch_array($resultado3))
			{
				array_push($titulo3,$row3[0]);
				array_push($link3,$row3[1]);
			}
			for($k=0;$k<count($titulo3);$k++)
			{
			?>       
				
a
			<li>
				<div class="sliderfig-grids">
					<div class="sliderfig-grid">
						<a href="https://www.youtube.com/watch?v=<?php echo $link3[$k];?>" title="<?php echo $titulo3[$k];?>" target="_blank">
						<img src="http://img.youtube.com/vi/<?php echo $link3[$k];?>/1.jpg" alt=" " />
						</a>
					</div>
				</div>
			</li>

			<?php
			}

			?>     
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