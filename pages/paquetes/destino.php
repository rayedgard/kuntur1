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
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,700,100,400' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="../../js/jquery.min.js"></script>
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
<script type="text/javascript" src="../../js/move-top.js"></script>
<script type="text/javascript" src="../../js/easing.js"></script>
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
<link rel="stylesheet" href="../../css/touchTouch.css" type="text/css" media="all" />
<script type="text/javascript" src="../../js/jquery.fancybox.js"></script>
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

   
	<!--fin idioma-->

		 <?php 
	include_once("../../conexion.php");
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
		$boton="Read More";
	
		
		//etiquetas
		
		//titulos
		$titulo1="DESTINATIONS";
		$titulo2="OTHERS PACKAGES";
		$titulo3="ASSOCIATED DESTINATIONS";
		

		
			//pie de pagina
		$politicas="PRIVACY POLICIES";
		$corporativo="CORPORATE MAIL";
		$diseno="DESIGN";
	


	}
	if($i==0)
	{
	
		
		//etiquetas
		
			//titulos
		$titulo1="DESTINOS";
		$titulo2="OTROS PAQUETES";
		$titulo3="DESTINOS ASOCIADOS";
		

	

		
		//pie de pagina
		$politicas="POLÍTICAS DE PRIVACIDAD";
		$corporativo="CORREO COORPORATIVO";
		$diseno="DISEÑO";

	}
	//fin discriminacion de idioma
	$id1= $_GET['cod1'];
	$id= $_GET['cod'];


// consulta para realizar el modificado de la tabla
$consulta = mysql_query("SELECT nombreDestino, imagenDestino , descripcion FROM destinos WHERE eliminar=0 AND idDestino='$id1'",$link);
// AND idioma='$i'
$row = mysql_fetch_array($consulta);



						   	//conuslta para paquetes aleatorios
$destinos ="SELECT a.idDestino, a.imagenDestino, a.nombreDestino FROM destinos a 
INNER JOIN destinosporpaquete b ON a.idDestino=b.idDestino WHERE b.idPaquete='$id' AND eliminar='0' AND a.idioma='$i'  ORDER BY RAND()"; 
$rdestinos = mysql_query($destinos,$link);
	
		//nombre del titulo
	$idDestino=array();
	$imagenDestino=array();
	$nombreDestino=array();

while($row2 = mysql_fetch_array($rdestinos))
		{
		array_push($idDestino,$row2[0]);
		array_push($imagenDestino,$row2[1]);
		array_push($nombreDestino,$row2[2]);
		}





	//conuslta para paquetes aleatorios
$paquetesAleatorios ="SELECT idPaquete, nombrePaquete FROM `paquetes` WHERE eliminar='0'  ORDER BY RAND()"; 
$paquetesAle = mysql_query($paquetesAleatorios,$link);
	
		//nombre del titulo
	$idPaqueteAl=array();
	$nombrePaqueteAl=array();

while($row2 = mysql_fetch_array($paquetesAle))
		{
		array_push($idPaqueteAl,$row2[0]);
		array_push($nombrePaqueteAl,$row2[1]);
		}





			
	
	?>
	    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://www.kunturtravelagency.com" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $row[0];?>" />
    <meta property="og:description"   content="<?php echo $row[2]; ?>" />
    <meta property="og:image"         content="../../administracion/imagenes/destinos/<?php echo $row[1];?>" />


	 <a class='flotanteE' href='../../index.php?i=0' ><img src='../../images/esp.png' border="0"/></a>
    <a class='flotanteI' href='../../index.php?i=1' ><img src='../../images/ing.png' border="0"/></a>  

	

<div class="banner-with-text1">
	<div class="container">
<!-- header -->	
		<div class="header">
			
			<div class="clearfix"> </div>
			<div class="header-bottom">
				<div class="header-bottom-left">
					<a href="index.html">
					<img src="../../images/kuntur.png">

					</a>
				</div>
				<div class="header-bottom-right">
					<span class="menu">MENU</span>
					<?php  if($i=='1'){echo ' 	
							<ul class="nav1">
								<li ><a href="../../index.php?i='.$i.'">HOME</a></li>
								<li ><a href="../events.php?i='.$i.'">ABOUT US</a></li>
								<li><a href="../gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="../blog.php?i='.$i.'">PACKAGES</a></li>
								<li><a href="../contact.php?i='.$i.'">CONTACTS</a></li>
                        	</ul>
                        	';}
                        	else
                        	{
                        		echo ' 	
							<ul class="nav1">
								<li ><a href="../../index.php?i='.$i.'">INICIO</a></li>
								<li ><a href="../events.php?i='.$i.'">QUIENES SOMOS</a></li>
								<li><a href="../gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="../blog.php?i='.$i.'">PAQUETES</a></li>
								<li><a href="../contact.php?i='.$i.'">CONTACTOS</a></li>
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
<!-- about -->
<div class="banner-bdy abt">
<div class="container">
	<div class="tutor">
		<div class="content-text">
			<div class="content-text-bottom">
				<div class="about-grids">


					<div class="col-md-6 about-grid">
						<img src="../../administracion/imagenes/destinos/<?php echo $row[1];?>" alt=" " />
					</div>


					<div class="col-md-6 about-grd">
						<h4><?php echo $row[0];?>
							<span><?php echo $titulo1; ?></span></h4>
						<p>
						<span><?php echo $row[2]; ?>.</span></p>
					</div>


					<div class="clearfix"> </div>


				</div>
			</div>
			<div class="people">
				<div class="col-md-6 people-left">
					<h3>Why People Choose Us</h3>
					<ul>
						<li>
							<div class="numer">1
							</div>
							<div class="numer-right">
								<h4><a href="paquete.php">Donec et justo tincidunt</a>
									<span>posuere elementum ante</span></h4>
								<p> Etiam interdum nisi ligula, ultrices molestie augue molestie nec. 
									Phasellus at est vitae sapien vestibulum convallis ut vel lorem. 
									Ut mollis elementum dolor eu consequat.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="numer">2
							</div>
							<div class="numer-right">
								<h4><a href="paquete.php">Donec et justo tincidunt</a>
									<span>posuere elementum ante</span></h4>
								<p> Etiam interdum nisi ligula, ultrices molestie augue molestie nec. 
									Phasellus at est vitae sapien vestibulum convallis ut vel lorem. 
									Ut mollis elementum dolor eu consequat.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="numer">3
							</div>
							<div class="numer-right">
								<h4><a href="paquete.php">Donec et justo tincidunt</a>
									<span>posuere elementum ante</span></h4>
								<p> Etiam interdum nisi ligula, ultrices molestie augue molestie nec. 
									Phasellus at est vitae sapien vestibulum convallis ut vel lorem. 
									Ut mollis elementum dolor eu consequat.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 people-right">
					<h3>We Think Globally</h3>
					<div class="fig-text">
						<div class="fig-text-left">
							<img src="../../images/4.jpg" alt=" " />
						</div>
						<div class="fig-text-right">
							<h4>Etiam interdum nisi ligula, ultrices</h4>
							<p>Pellentesque venenatis lorem vitae nisl scelerisque dignissim.
								Sed tristique finibus leo, et sodales tortor venenatis id. Etiam
								interdum nisi ligula, ultrices molestie augue molestie nec.</p>
						</div>
						<div class="clearfix"> </div>
						<p>Pellentesque venenatis lorem vitae nisl scelerisque dignissim.
							Sed tristique finibus leo, et sodales tortor venenatis id. Etiam
							interdum nisi ligula, ultrices molestie augue molestie nec.
							Phasellus at est vitae sapien vestibulum convallis ut vel lorem. 
							Ut mollis elementum dolor eu consequat.
							<span>Pellentesque venenatis lorem vitae nisl scelerisque dignissim.
								Sed tristique finibus leo, et sodales tortor venenatis id. Etiam
								interdum nisi ligula, ultrices molestie augue molestie nec. 
								Phasellus at est vitae sapien vestibulum convallis ut vel lorem. 
								Ut mollis elementum dolor eu consequat.</span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="fig-text1">
				<div class="col-md-6 fig-text1-right">
					<h3><?php echo $titulo2;?></h3>


					 <?php
			  for($k=0;$k<count($idPaqueteAl);$k++)
			  {
			   ?>

					<ul>
						<li><a href="paquete.php?cod=<?php echo $idPaqueteAl[$k];?>&i=<?php echo $i;?>"><?php echo $nombrePaqueteAl[$k]; ?></a></li>
									
					</ul>
                <?php  } ?>

				</div>


				<div class="col-md-6 fig-text1-right">
					<h3><?php echo $titulo3;?></h3>
							 <?php
			  for($k=0;$k<count($idDestino);$k++)
			  {
			   ?>

					<ul>
						<li><a href="destino.php?cod=<?php echo $id; ?>&cod1=<?php echo $idDestino[$k]; ?>&i=<?php echo $i;?>"><?php echo $nombreDestino[$k];?></a></li>						
					</ul>
                <?php  } ?>


				</div>


				<div class="clearfix"> </div>
			</div>
	
		
	</div>
	</div>
	</div>
<!-- //about -->
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
</html>