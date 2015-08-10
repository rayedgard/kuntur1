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

<link rel="stylesheet" type="text/css" href="../menucssjs/css/default.css" />
		<link rel="stylesheet" type="text/css" href="../menucssjs/css/component.css" />
		<script src="../menucssjs/js/modernizr.custom.js"></script>
			<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
			</script>
</head>
	
<body>
    <a class='flotanteE' href='../index.php?i=0' ><img src='../images/esp.png' border="0"/></a>
    <a class='flotanteI' href='../index.php?i=1' ><img src='../images/ing.png' border="0"/></a>
	<!--fin idioma-->



<?php 


include_once("../conexion.php");
	$link = Conectarse();
	$id = $_GET['cod'];
	if($id<=0)
	{ $id=1;}	


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
		//descripcion
		$descripcion="Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.";
		//titulos
		$titulo1="ABOUT US";

		//footer
		$titulo2="About Eco Travel";
		$titulo3="Connect With Us";
		$titulo4="Extra Features";
		$titulo5="PACKAGES";
		$titulo6="PACKAGES";
		$titulo7="PACKAGES";

	}
	if($i==0)
	{
		//botones
		$boton="MÁS INFO...";
		$boton1="MÁS";
		$reservas="RESERVAR";
		//descripcion
		$descripcion="cuando nuestro poder de elección es sin trabas y cuando nada impide que seamos capaces de hacer lo que es más agradable a, todo placer es de agradecer y cada dolor evitado.";
			//titulos
		$titulo1="QUIENES SOMOS";
	
			//footer
		$titulo2="Acerca de Kuntur Travel";
		$titulo3="Redes Sociales";
		$titulo4="Caracteristicas Extras";
		$titulo5="PACKAGES";
		$titulo6="PACKAGES";
		$titulo7="PACKAGES";

	}
	//fin discriminacion de idiom
		// consulta para realizar el modificado de la tabla
			$consulta = mysql_query("SELECT nombreCategoria FROM categoriafotos WHERE idCategoriaFoto ='$id'",$link);
			$row = mysql_fetch_array($consulta);






			//conuslta para paquetes aleatorios
			$fotos ="SELECT  nombreFoto FROM fotos WHERE idCategoriafoto='$id' ORDER BY RAND()"; 
			$rfotos = mysql_query($fotos,$link);
		
			//nombre del titulo
			$nombrefoto=array();

			while($row2 = mysql_fetch_array($rfotos))
			{
				array_push($nombrefoto,$row2[0]);
			}
	



				 	//conuslta para las categoria de fotos
			$catego ="SELECT  idCategoriaFoto, nombreCategoria FROM categoriafotos ORDER BY RAND()"; 
			$cat = mysql_query($catego,$link);
	
			//nombre del titulo
			$idcat=array();
			$nombres=array();

			while($row1 = mysql_fetch_array($cat))
			{
				array_push($idcat,$row1[0]);	
				array_push($nombres,$row1[1]);
			}
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
								<li><a href="../index.php?i='.$i.'">HOME</a></li>
								<li><a href="events.php?i='.$i.'">ABOUT US</a></li>
								<li  class="cap"><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
								<li><a href="blog.php?i='.$i.'">PACKAGES</a></li>
								<li><a href="contact.php?i='.$i.'">CONTACTS</a></li>
                        	</ul>
                        	';}
                        	else
                        	{
                        		echo ' 	
							<ul class="nav1">
								<li ><a href="../index.php?i='.$i.'">INICIO</a></li>
								<li><a href="events.php?i='.$i.'">QUIENES SOMOS</a></li>
								<li class="cap"><a href="gallery.php?i='.$i.'">MULTIMEDIA</a></li>
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
<!-- gallery -->
<div class="banner-bdy gal">
   <div class="container">
	<div class="gallery">

		<h3>Multimedia</h3>
		<p class="gal-txt"><?php echo $descripcion; ?>.</p>

		 <div class="container">	
	    <div class="main clearfix" >

				<nav id="menu" class="nav">	

					<ul>
				 	<?php


		
	


						for($k=0;$k<count($nombres);$k++)
						{
						?>
							<li>
								<a href="gallery.php?cod=<?php echo $idcat[$k];?>&i=<?php echo $i;?>" >

								<span>
									<?php echo $nombres[$k]; ?>
								</span>

								</a>
							</li>

						<?php  } ?>	
					</ul>
				</nav>
			</div>
			</div>





		







			<h3 style="text-align:center; font-size:25px;"><?php echo $row[0]; ?></h3>
			</br>

    			<div class="gallery-grids"><!--para las fotos-->

	

    	
					<?php
		     		   for($j=0;$j<count($nombrefoto);$j++)
						{
							  list($width,$height)= getimagesize("../administracion/imagenes/fotos/$row[0]/$nombrefoto[$j]");
							  
							if($width>$height)
							{
								?>
								
								<div class="gallery-grid">
								<a class="fancybox" href="../administracion/imagenes/fotos/<?php echo $row[0]; ?>/<?php echo $nombrefoto[$j]; ?>" data-fancybox-group="gallery"> 
		        	   			<img                 src="../administracion/imagenes/fotos/<?php echo $row[0]; ?>/<?php echo $nombrefoto[$j]; ?>" class="img-style row6">
		        	   			<span> </span>
		           				</a>
		           				</div>


		           				<?php

		           				}
		           				if($width<$height)
		           				{

		           					?>	    
		           				
							<div class="gallery-grid1">
		        	   		<a class="fancybox" href="../administracion/imagenes/fotos/<?php echo $row[0]; ?>/<?php echo $nombrefoto[$j]; ?>" data-fancybox-group="gallery"> 
		        	   		<img                 src="../administracion/imagenes/fotos/<?php echo $row[0]; ?>/<?php echo $nombrefoto[$j]; ?>" class="img-style row6">
		        	   		<span> </span>
		           			</a>
		           			</div>

		           			<?php
		           				}
		           			}
		           			?>
		           			
		           

		       
		           		



		             
		         	 
					</div> 

    			</div>  

		



				</div>
			</div>
		</div>




		
<!-- //gallery -->
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


							<?php 

					for ($q=0; $q < 2; $q++) { 
						# code...
						$resultado = $q % 2;
						echo $resultado;
					}
				?>

<?php
list($ancho, $alto, $tipo, $atributos) = getimagesize("choquequirao-940x270.jpg");
echo $ancho;
echo $alto;

?>




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