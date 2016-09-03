<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
if (isset($_SESSION["user"])) {
// header("location:login.php");
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
<script type="text/javascript" src="js/validarut.js"></script>

<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/main.css" rel="stylesheet" media="screen">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->

   <script src="js/messages.js"></script> 
   <script type="text/javascript" src="js/jquery.validate.js"></script>
  
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
			  	   <p>Bienvenido a San Fernando Store! <span>Tarjeta:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
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
			        <li class=><a href="index.html">Inicio</a></li>
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

		

<div id="formulario" class="container">

 <form class="form-signup" id="usersignup" name="usersignup" method="post" action="crear_usuario.php"  >
        <h2 class="form-signup-heading">Registro de Cliente</h2>

        <input name="rut" id="rut" type="text" class="form-control" placeholder="RUT" onBlur="javascript:return Rut(document.usersignup.rut.value)" 
        maxlength="12" >
        <h5> <div id="mensaje1" class="mensajerror">Ingresa tu  rut</div></h5>

        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" onfocus="return repetidos(this);" maxlength="50" ">
        <h5> <div id="mensaje2" class="mensajerror">Ingresa tu  nombre</div></h5>

        <input name="direccion" id="direccion" type="text" class="form-control" placeholder="Ciudad"  maxlength="100">
        <h5> <div id="mensaje3" class="mensajerror">Ingresa tu  direccion</div></h5>

        <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Telefono" onkeypress="return justNumbers(event);"  maxlength="15">
        <h5> <div id="mensaje4" class="mensajerror">Ingresa tu  Telefono</div></h5>
        
        <input name="email" id="email" type="text" class="form-control" placeholder="Email" maxlength="15">
          <h5> <div id="mensaje5" class="mensajerror">Ingresa un correo valido</div></h5>

        <input name="password1" id="password1" type="password" class="form-control" placeholder="Clave" minlength="4" maxlength="20" >
        <h5> <div id="mensaje6" class="mensajerror">Escribe una clave </div></h5>

        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repetir clave" minlength="4" maxlength="20" >
        <h5> <div id="mensaje7" class="mensajerror">Repite tu clave</div></h5>

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
       <!-- <a style="color:#FFFFFF" href="main_login.php"> hola</a>-->
     <br>
        <div id="message" ></div>
   <a href="main_login.php"><img id="btnoculto" src="images/ingresar.png"></a> 
      </form>


    </div> <!-- /container -->
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
<script>
$(document).ready(function(){

  $("#submit").click(function(){

    var mirut = $("#rut").val();
    var minombre = $("#nombre").val();
    var midireccion = $("#direccion").val();
    var mitelefono = $("#telefono").val();
    var miemail = $("#email").val();
    var mipassword = $("#password1").val();
    var mipassword2 = $("#password2").val();
  var expr = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;


  if(mirut == "") {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> Por favor ingrese rut</div>");

  }else if (minombre == "") {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor ingrese nombre </div>");

  }else if (midireccion == "") {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor ingrese su ciudad</div>");

  }else if (mitelefono == "") {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor ingrese su telefono</div>");

  }else if (miemail == "" || !expr.test(miemail)) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor ingrese su email valido</div>");
  }else if (mipassword == "") {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor ingrese su clave</div>");

  }else if (mipassword2 == "") {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor repita su clave</div>");
  }else if (mipassword != mipassword2) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> Claves no coinciden</div>");
  }
    else {
    
    $.ajax({
    type: "POST",
    url: "crear_usuario.php",
    data: "rut="+mirut+"&nombre="+minombre+"&direccion="+midireccion+"&telefono="+mitelefono+"&email="+miemail+"&password1="+miemail+"&password1="+miclave,
    success: function(){
alert("gggggg");
			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == ""){
             alert("fgfdgdfg");
			$("#message").html(html);
            $('#submit').hide();
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>")
        }
      });
    }
    return false;
  });
});

function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
 

</script>


<script>
	function repetidos(e) {
                         
      var consulta;
             
 alert("dfsdf");
                                                 
      //comprobamos si se pulsa una tecla
      $("#rut").keyup(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#rut").val();
                                      
             //hace la búsqueda
             $("#message").delay(1000).queue(function(n) {      
                                           
                  $("#message").html('<img src="images/ajax-loader.gif" />');
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                    alert("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#message").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
                          
});
</script>

<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>







   
</body>
</html>

