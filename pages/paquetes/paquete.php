<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Eco Travel a Travel Agency Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
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
<div class="banner-with-text1">
	<div class="container">
<!-- header -->	
		<div class="header">
			<div class="header-top">
				<input type="text" placeholder="Search" required=" ">
			</div>
			<div class="clearfix"> </div>
			<div class="header-bottom">
				<div class="header-bottom-left">
					<a href="index.html">Eco<span>travel</span></a>
				</div>
				<div class="header-bottom-right">
					<span class="menu">MENU</span>
					<ul class="nav1">
						<li><a href="../../index.php">HOME</a></li>
						<li><a href="../about.php">ABOUT</a></li>
						<li><a href="../events.php">EVENTS</a></li>
						<li><a href="../services.php">SERVICES</a></li>
						<li><a href="../gallery.php">GALLERIES</a></li>
						<li class="cap"><a href="../blog.php">BLOG</a></li>
						<li><a href="../contact.php">CONTACT</a></li>
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
	</div>
</div>
<!-- //header -->








<?php

include_once("../../conexion.php");
$link = Conectarse();
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


				<img src="../../administracion/imagenes/paquetes/<?php echo $row[1];?>" alt=" ">



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
							<li><a href="#" class="c"> </a></li>
						</ul>
					</div>



					<div class="com">
						<h3>Comments</h3>
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
						</ul>
					</div>
					
				</div>



			</div>
			<div class="col-md-4 sing-img-text-left">
				<div class="blog-right1">
					<div class="search">
						<h3>NEWSLETTER</h3>
						<form>
							<input type="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="categories">
						<h3>Categories</h3>
						<ul>
							<li><a href="#">Aliquam dapibus tincidunt</a></li>
							<li><a href="#">Donec sollicitudin molestie</a></li>
							<li><a href="#">Fusce feugiat malesuada odio</a></li>
							<li><a href="#">Cum sociis natoque penatibus</a></li>
							<li><a href="#">Magnis dis parturient montes</a></li>
							<li><a href="#">Donec sollicitudin molestie</a></li>
						</ul>
					</div>
					<div class="categories categories-mid">
						<h3>Archieves</h3>
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
						<h3>DESTINOS RELACIONADOS</h3>


						<?php

						//consulta para paquetes aleatorios
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
								<a href="destino.php?cod=<?php echo $idDestino[$k];?>"><img src="../../administracion/imagenes/destinos/<?php echo $imagenDestino[$k];?>" alt=" " /></a>
							</div>

							<div class="related-post-right">
								<h4><a href="paquete.php"><?php echo $nombreDestino[$k]; ?></a></h4>
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
			<div class="leave-a-comment">
				<h3>Leave your comment Here</h3> 
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" required="">
					<input type="text" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
					<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type Your Comment here...';}" required="">Type Your Comment here...</textarea>
					<input type="submit" value="Add Comment">
				</form>
			</div>
		</div>
		</div>
	</div>
<!-- //single -->
<!-- footer -->
	<div class="footer-top">
	<div class="container">
		<div class="footer-top-grids">
			<div class="col-md-4 footer-top-grid">
				<h3>About Eco Travel</h3>
				<p>"At vero eos et accusamus et iusto odio dignissimos ducimus 
				qui blanditiis praesentium voluptatum deleniti atque corrupti quos 
				dolores et quas molestias excepturi sint occaecati cupiditate non 
				provident, similique sunt in culpa qui officia deserunt mollitia animi, 
				id est laborum et dolorum fuga. </p>
				<div class="read1">
					<a href="../paquetes/paquete/paquete.php">Read More</a>
				</div>
			</div>
			<div class="col-md-4 footer-top-grid">
				<h3>Connect With Us</h3>
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
				<h3>Extra Features</h3>
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