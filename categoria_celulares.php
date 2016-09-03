<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
if(!isset($_SESSION['user'])){
 // header("location:index.php");


	  $_SESSION['user'] = ''; 

}




?>


<!DOCTYPE HTML>
<head>
<title>San Fernando Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
    <p><span>Necesita ayuda?</span> LLamar <span class="number">+569-99675432</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="#">Registrarse</a></li>
					<li><a href="#">Ingresar</a></li>
					<li><a href="#">Entregas</a></li>
					<li><a href="#">Mi cuenta</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="images/logo4.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	     <p>Bienvenido a San Fernando Store!  <span>Tarjeta:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   <p><span>Usuario:</span><?php echo ''.$_SESSION["user"].''?><span>
			  	   	<ul class="dropdown">
							<li>no tienes item en tu tarjeta</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		     </script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			        <li class="active"><a href="index.html">Inicio</a></li>
			    	<li><a href="about.html">Acerca de Nosotros</a></li>
			    	<li><a href="delivery.html">Envio</a></li>
			    	<li><a href="news.html">Noticias</a></li>
			    	<li><a href="contact.html">Contacto</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				   <h3>Categorias</h3>
				      <li><a href="#">Telefonos Moviles</a></li>
				      <li><a href="categoria_notebooks.html">Notebook & PC</a></li>
				      <li><a href="categoria_videojuegos.html">Consolas</a></li>
				        <li><a href="categoria_hogar.html">Electro Hogar</a></li>
				 
				    <!--   <li><a href="#">Footwear</a></li>
				       <li><a href="#">Jewellery</a></li>
				       <li><a href="#">Clothing</a></li>
				       <li><a href="#">Home Decor &amp; Kitchen</a></li>
				       <li><a href="#">Beauty &amp; Healthcare</a></li>
				       <li><a href="#">Toys, Kids &amp; Babies</a></li> -->
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="preview_slider_woofer.html"><img src="images/slide-1-image.png" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                           <h1>Oferta<br>Subwoofer Logitec,5.1</h1>
		                                 <h2>20% Desc</h2>
									   <div class="features_list">
									   	<h4>Los sw-g2.1 1250 están diseñados para gamers y fanáticos de la música</h4>							               
							            </div>
							             <a href="preview_slider_woofer.html" class="button">Comprar</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>Oferta<br>Smart TV Samsung</h1>
		                                 <h2>40% Desc</h2>
									   <div class="features_list">
									   	<h4>Vive la Revolucion de la imagen!</h4>							               
							            </div>
							             <a href="preview_slider_tv.html" class="button">Comprar</a>
					                   </div>		
						             	 <div class="slider-img">
									     <a href="preview_slider_tv.html"><img src="images/slide-3-image.jpg" alt="learn more" /></a>
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="preview_slider_lcd.html"><img src="images/slide-2-image.jpg" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>Oferta<br>LED 32" Panasonic</h1>
		                                 <h2>10% Desc</h2>
									   <div class="features_list">
									   	<h4>Exelente calidad  de imagen para tu PC Full HD</h4>							               
							            </div>
							             <a href="preview_slider_lcd.html" class="button">Comprar</a>
					                   </div>	
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Nuevos Smartphones</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Smartphone</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview_cel_samsung_j7.html"><img src="images/celulares/samsung_j7_1.jpg" alt="" /></a>
					 <h2>Celular Samsung J7 64GB</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$249.990</span></p>
					    </div>
					       		<div class="add-cart">	
									<h4><a href="preview_cel_samsung_j7.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview_iphone.html"><img src="images/celulares/iphone.png" alt="" /></a>
					 <h2>APPLE IPHONE 6S PLUS 64GB</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$799.990</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_iphone.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview_mototercera.html"><img src="images/celulares/motogter.png" alt="" /></a>
					 <h2>Moto G Tercera generacion Smart </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">169.990</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_mototercera.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview_huawei.html"><img src="images/celulares/huawei.png" alt="" /></a>
					 <h2>HUAWEI SMARTPHONE P8 LITE NEGRO</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$149.990</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_huawei.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Economicos</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">Ver todos los productos</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview_arcatel.html"><img src="images/celulares/arcatel.png" alt="" /></a>					
					 <h2>ALCATEL SMARTPHONE PIXI 4 3.5 NEGRO</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$29.990</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_arcatel.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview_lenovo.html"><img src="images/celulares/lenovo.png" alt="" /></a>
					 <h2>LENOVO SMARTPHONE A2010 NEGRO PW/h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$109.990<</span></p>      
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_lenovo.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="preview_motog.html"><img src="images/celulares/motog.png" alt="" /></a>
					 <h2>MOTOROLA SMARTPHONE MOTO G 3ERA GENERACIÓN </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$129.000</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_motog.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <a href="preview_lg.html.html"><img src="images/celulares/lg.png" alt="" /></a>
					 <h2>LG SMARTPHONE G4 STYLUS DORADO</h2>					 
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$149.000</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="preview_lg.html">Descripción</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
    </div>
 </div>
</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Informacion</h4>
						<ul>
						<li><a href="about.html">Acerca</a></li>
						<li><a href="contact.html">Servicio al Cliente</a></li>
						<li><a href="#">Busqueda Ananzada</a></li>
						<!--<li><a href="delivery.html">Orders and Returns</a></li>-->
						<li><a href="contact.html">Contacto</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Como Comprar con nosotros</h4>
						<ul>
						<li><a href="about.html">Acerca</a></li>
						<li><a href="contact.html">Servicios</a></li>
						<li><a href="#">Politica de Privacidad</a></li>
					<!--<li><a href="delivery.html">Orders and Returns</a></li>-->
						<li><a href="#">Buscar Terminos</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Mi Cuenta</h4>
						<ul>
							<li><a href="contact.html">Registrarse</a></li>
							<li><a href="index.html">Ver Tarjeta</a></li>
					        <li><a href="#">Ver mis ordenes</a></li>
							<li><a href="contact.html">Ayuda</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact0</h4>
						<ul>
							<li><span>+569-99675432</span></li>
							<li><span>+569-99675435</span></li>
						</ul>
						<div class="social-icons">
							<h4>Siguenos en:</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p>Compañia San fernando Store  © All rights Reseverd | Design by  <a href="#">Ingenieria Informatica AIEP 2016</a> </p>
		   </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

