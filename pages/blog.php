<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Eco Travel a Travel Agency Category Flat Bootstarp Resposive Website Template | Blog :: w3layouts</title>
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
		$boton1="MORE";
		$reservas="RESERVE";
		//descripcion
		$descripcion="Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.";
		//titulos
		$titulo1="PACKAGES";
		$titulo="Price";

		//paquetes
		

		//footer
		$titulo2="About Eco Travel";
		$titulo3="Connect With Us";
		$titulo4="Extra Features";
	

	}
	if($i==0)
	{
		//botones
		$boton="LEER MÁS";
		$boton1="MÁS";
		$reservas="RESERVAR";
		//descripcion
		$descripcion="cuando nuestro poder de elección es sin trabas y cuando nada impide que seamos capaces de hacer lo que es más agradable a, todo placer es de agradecer y cada dolor evitado.";
			//titulos
		$titulo1="PAQUETES";
		$titulo="Precio";
	
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
					<a href="../index.php&i=<?php echo $i;?>">
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
								<li class="cap"><a href="blog.php?i='.$i.'">PACKAGES</a></li>
								<li><a href="contact.php?i='.$i.'">CONTACTS</a></li>
                        	</ul>
                        	';}
                        	else
                        	{
                        		echo ' 	
							<ul class="nav1">
								<li><a href="../index.php?i='.$i.'">INICIO</a></li>
								<li><a href="events.php?i='.$i.'">QUIENES SOMOS</a></li>
								<li><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li class="cap"><a href="blog.php?i='.$i.'">PAQUETES</a></li>
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
<!-- blog -->
<div class="banner-bdy blg">
	<div class="container">
	<div class="blog">
		<h2><?php echo $titulo1;?></h2>
		<p class="gal-txt"><?php echo $descripcion; ?>.</p>
	
		<div class="blog-grids">


		<?php

		include_once("../conexion.php");
		$link=Conectarse();

		//consulta de paquetes aleatorios
		$ConsultaPaqueteAl = "SELECT idPaquete, nombrePaquete, imagen, costo, descripcion FROM paquetes WHERE eliminar='0' ORDER BY RAND()";
		$ConsultaAl =mysql_query($ConsultaPaqueteAl,$link);

		//crear los arreglos
		$idPaqueteAl=array();
		$nombrePaqueteAl=array();
		$imagenAl=array();
		$costoAl=array();
		$descripcionAl=array();

		//Asignar Parquete al arreglo
		while ($row = mysql_fetch_array($ConsultaAl)) {
			array_push($idPaqueteAl,$row[0]);
			array_push($nombrePaqueteAl,$row[1]);
			array_push($imagenAl,$row[2]);
			array_push($costoAl,$row[3]);			
			array_push($descripcionAl,$row[4]);	
		}


		for ($r=0; $r <count($idPaqueteAl) ; $r++) /*Tiene que generar 4*/
		 { ?>

			
			<div class="col-md-3 blog-grid">

			
					
				<div class="blog-grid1">
					<a href="paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$r];?>&i=<?php echo $i;?>"><img src="../administracion/imagenes/paquetes/<?php echo $imagenAl[$r]; ?>" alt=" " /></a> <!--IMAGEN -->
					<div class="blog-grid1-info">
						<div class="soluta">
							<a href="paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$r];?>&i=<?php echo $i;?>"><?php echo $nombrePaqueteAl[$r];  ?></a> <!--NOMBRE-->
								<span><?php echo $titulo;?>: S/. <?php echo $costoAl[$r];  ?></span> <!--COSTO -->
						</div>
						<p><?php echo substr(strip_tags($descripcionAl[$i]),0,26)."..."; ?></p> <!--PARRAFO -->


						<div class="red-mre">
							<a href="paquetes/paquete.php?cod=<?php echo $idPaqueteAl[$r];?>&i=<?php echo $i;?>"><?php echo $boton;?></a> 
						</div>
					</div>
				</div>	
			</div>
				<?php }?>









			<div class="clearfix"> </div>
		</div>
		<!--
		<nav>
		  <ul class="pagination">
			<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">4 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
			<li class="abled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
		  </ul>
		</nav>-->
	</div>
	</div>
	</div>
<!-- //blog -->
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