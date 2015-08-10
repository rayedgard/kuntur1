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
    <a class='flotanteE' href='../../index.php?i=0' ><img src='../../images/esp.png' border="0"/></a>
    <a class='flotanteI' href='../../index.php?i=1' ><img src='../../images/ing.png' border="0"/></a>
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
		$boton="MORE INFO";
		$boton1="MORE";
		$reservas="RESERVE";
		//descripcion
		$descripcion="Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.";
		//titulos
		$titulo1="OTHERS PACKAGES";
		$titulo5="ARCHIEVES";
		$titulo6="ASSOCIATED DESTINATIONS";
		$titulo7="COMMENTS";
		
		

		//footer
		$titulo2="About Eco Travel";
		$titulo3="Connect With Us";
		$titulo4="Extra Features";
		

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
		$titulo1="OTROS PAQUETES";
		$titulo5="ARCHIVOS";
		$titulo6="DESTINOS RELACIONADOS";
		$titulo7="COMENTARIOS";
		
		
	
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
					<a href="../../index.php&i=<?php echo $i;?>">
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








<?php

$id = $_GET['cod'];

//Consulta para listar el paquete correspondiente
$paquetelista = mysql_query("SELECT nombrePaquete, imagen,descripcion, costo FROM paquetes WHERE eliminar=0 AND idPaquete='$id'",$link);
$row = mysql_fetch_array($paquetelista);

?>






<!-- single -->
	<div class="banner-bdy sig">

		<div class="container">

			<div class="single">


			<div class="col-md-8 sing-img-text">

				<img align="right" src="../../administracion/imagenes/paquetes/<?php echo $row[1];?>" alt=" ">

				<div class="sing-img-text1">

					<h3><?php echo $row[0];   ?></h3>

					<p class="est">
						<span>

						<?php echo $row[2];?>

						</span>
						</p>

					
						

					<div class="list">
						<ul>
							<li><a href="#" class="a"> </a></li>
							<li><a href="#" class="b"> </a></li> 
							<li><a href="https://www.facebook.com/pages/Informatic-Technology-Development-Corporation-SA/157087624356221" class="c"> </a></li>
						</ul>
					</div>
					
					
					<div class="fb-share-button" data-href="http://www.kunturtravelagency.com/tours-cusco/choquequirao-trek-5days-4nights-3-e.html" data-layout="button_count"></div></br>
					
					<div class="fb-page" data-href="https://www.facebook.com/pages/Lobo-Cruz/598516906843018?sk=timeline" data-width="360" data-height="180" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Lobo-Cruz/598516906843018?sk=timeline"><a href="https://www.facebook.com/pages/Lobo-Cruz/598516906843018?sk=timeline">Lobo Cruz</a></blockquote></div></div>



					<div class="com">
						<h3><?php echo $titulo7; ?></h3>

						<div id="fb-root"></div>
						<script>(function(d, s, id) {
 						 var js, fjs = d.getElementsByTagName(s)[0];
  						if (d.getElementById(id)) return;
  						js = d.createElement(s); js.id = id;
  						js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>




						<div class="fb-comments" data-href="https://www.facebook.com/pages/Lobo-Cruz/598516906843018?fref=ts" data-numposts="5"></div></br>

						

						<!--
						<ul class="media-list">


						  <li class="media">


							<div class="media-left">
							  <a href="#">
								<img class="media-object" src="../../images/11.jpg" alt="" />
							  </a>
							</div>


							<div class="media-body">
							  <h4 class="media-heading">Simmy</h4>
							  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
							  scelerisque ante sollicitudin commodo. Cras purus odio, 
							  vestibulum in vulputate at, tempus viverra turpis. 
							  Fusce condimentum nunc ac nisi vulputate fringilla. 
							  Donec lacinia congue felis in faucibus.
							  <a href="#">Reply</a>
							</div>
						  </li>



						  <li class="media">
							<div class="media-left">
							  <a href="#">
								<img class="media-object" src="../../images/13.jpg" alt="" />
							  </a>
							</div>

							<div class="media-body">
							  <h4 class="media-heading">Sandra Rickon</h4>
							  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
							  scelerisque ante sollicitudin commodo. Cras purus odio, 
							  vestibulum in vulputate at, tempus viverra turpis. 
							  Fusce condimentum nunc ac nisi vulputate fringilla. 
							  Donec lacinia congue felis in faucibus.
							  <a href="#">Reply</a>
							</div>
						  </li>


						  <li class="media">
							<div class="media-left">
							  <a href="#">
								<img class="media-object" src="../../images/12.jpg" alt="" />
							  </a>
							</div>
							<div class="media-body">
							  <h4 class="media-heading">Rita Rider</h4>
							  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
							  scelerisque ante sollicitudin commodo. Cras purus odio, 
							  vestibulum in vulputate at, tempus viverra turpis. 
							  Fusce condimentum nunc ac nisi vulputate fringilla. 
							  Donec lacinia congue felis in faucibus.
							  <a href="#">Reply</a>
							</div>
						  </li>


						</ul>-->
					</div>
					
				</div>



			</div>


			<div class="col-md-4 sing-img-text-left">
				<div class="blog-right1">
				<div>
					</br>
					</br>
				</div>
					<div class="categories">
						<h3><?php echo $titulo1?></h3>

						<?php 
							$consultaPaqueteAleatorio = "SELECT idPaquete, nombrePaquete, imagen, costo FROM paquetes WHERE eliminar='0' ORDER BY RAND()";
							$conexPaqueteAleatorio = mysql_query($consultaPaqueteAleatorio,$link);

							//creamos arreglos
							$idPaqueteAl=array();
							$nombrePaqueteAl=array();
							$imagenAl=array();
							$costoAl=array();

							// Asignamos datos a los arreglos
							
							while($ArregloPaqAle = mysql_fetch_array($conexPaqueteAleatorio))
							{
								array_push($idPaqueteAl, $ArregloPaqAle[0]);
								array_push($nombrePaqueteAl, $ArregloPaqAle[1]);
								array_push($imagenAl, $ArregloPaqAle[2]);
								array_push($costoAl, $ArregloPaqAle[3]);
							}
						?>

						
						<ul>


						<?php
						for ($x=0; $x <count($idPaqueteAl) ; $x++) 
						{ 
						?>
							
						
							<li><a href="paquete.php?cod=<?php echo $idPaqueteAl[$x];?>&i=<?php echo $i;?>"><?php echo $nombrePaqueteAl[$x]; ?></a></li>	

					<?php } ?>

						</ul>




					</div>
					<div class="categories categories-mid">
						<h3><?php echo $titulo5?></h3>
						<ul>
							<li><a href="#">May 20,2009</a></li>
							<li><a href="#">July 31,2010</a></li>
							<li><a href="#">January 20,2012</a></li>
							<li><a href="#">November 2,2012</a></li>
							<li><a href="#">December 25,2014</a></li>
							<li><a href="#">January 14,2015</a></li>
						</ul>
					</div>
					<div class="related-posts">
						<h3><?php echo $titulo6?></h3>


						<?php

						//consulta para Destinos aleatorios
						$consultaAleatorio ="SELECT a.idDestino, a.imagenDestino, a.nombreDestino, a.descripcion FROM destinos a 
						INNER JOIN destinosporpaquete b ON a.idDestino=b.idDestino WHERE b.idPaquete='$id' AND eliminar='0'  ORDER BY RAND()"; 
						$destino = mysql_query($consultaAleatorio,$link);
						// id imagen y nombre
						 $idDestino=array();
						 $imagenDestino =array();
						 $nombreDestino=array();
						 $descripcionDestino=array();

						 while($row2 = mysql_fetch_array($destino))
						 {
						 	array_push($idDestino,$row2[0]);
						 	array_push($imagenDestino,$row2[1]);
						 	array_push($nombreDestino,$row2[2]);
						 	array_push($descripcionDestino,$row2[3]);
						 }
						 	

						for($k=0;$k<count($idDestino);$k++)
				        {

				        ?>
				       	<div class="related-post">

							<div class="related-post-left">
								<a href="destino.php?cod=<?php echo $id; ?>&cod1=<?php echo $idDestino[$k]; ?>&i=<?php echo $i;?>"><img src="../../administracion/imagenes/destinos/<?php echo $imagenDestino[$k];?>" alt=" " /></a>
							</div>

							<div class="related-post-right">
								<h4><a href="destino.php?cod=<?php echo $id; ?>&cod1=<?php echo $idDestino[$k]; ?>&i=<?php echo $i;?>"><?php echo $nombreDestino[$k]; ?></a></h4>
								<p>
									<span><?php echo substr(strip_tags($descripcionDestino[$k]),0,50)."..."; ?></span>
								</p>
							</div>
							
							<div class="clearfix"> </div>
						    </div>
                
				
                         <?php } ?>

			


					</div>
				</div>
			</div>


			<div class="clearfix"> </div>
		
		</div>
		</div>
	</div>
<!-- //single -->
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
					<a href="paquete.php&i=<?php echo $i;?>" ><?php echo $boton; ?></a>
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