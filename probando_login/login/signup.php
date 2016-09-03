<?php
  session_start();

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
   <script  src = "js/jquery-1.7.2.min.js"> </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>

  <body>
  
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading">Registro de Cliente</h2>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Nombre" autofocus>
        <h5> <div id="mensaje1" class="mensajerror"> Escribe tu nombre</div></h5>

        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
          <h5> <div id="mensaje2" class="mensajerror">Ingresa un correo valido</div></h5>

        <input name="password1" id="password1" type="password" class="form-control" placeholder="Clave">
        <h5> <div id="mensaje3" class="mensajerror">Escribe una clave </div></h5>

        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repetir clave">
        <h5> <div id="mensaje4" class="mensajerror">Repite tu clave</div></h5>

        <input name="ciudad" id="ciudad" type="text" class="form-control" placeholder="Ciudad">
        <h5> <div id="mensaje5" class="mensajerror">Ingresa  Cuidad</div></h5>

        <input name="rut" id="rut" type="text" class="form-control" placeholder="RUT">
        <h5> <div id="mensaje6" class="mensajerror">Ingresa tu  rut</div></h5>

        <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Telefono">
        <h5> <div id="mensaje7" class="mensajerror">Ingresa tu  Telefono</div></h5>

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
       <!-- <a style="color:#FFFFFF" href="main_login.php"> hola</a>-->
       
     <br>
        <div id="message" ></div>
   <a href="main_login.php"><img id="btnoculto" src="images/ingresar.png"></a> 
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>


   <!-- <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>  -->
<!--<script>

$( "#usersignup" ).validate({

  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});

</script>-->

<!--<script type="application/javascript">

 function retardo() {
    $("#btnoculto").fadeIn();
 }
var expr = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

 //var expr = /^[a-zA-Z0-9_\.\-]+\@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

 $(document).ready(function(){


$("#submit").click(function () {
   

    var nombre = $("#newuser").val();
    var correo = $("#email").val();
    var clave = $("#password1").val();
    var clavedos = $("#password2").val();
if (nombre == "")
{
  $("#mensaje1").fadeIn();
  return false;
}
  else
{
  $("#mensaje1").fadeOut(); 
  if(correo == "" || !expr.test(correo))
  {

  $("#mensaje2").fadeIn();

  return false;

  }else {

  $("#mensaje2").fadeOut();

  if(clave == "") {

  $("#mensaje3").fadeIn();

  return false;


    }else {

  $("#mensaje3").fadeOut();

  if(clavedos == "") {

  $("#mensaje4").fadeIn();

  return false;

      } else if(clave==clavedos){
        $("#mensaje4").fadeOut();
         $("#submit").fadeOut();
          document.getElementById("newuser").value = "";
          document.getElementById("email").value = "";
          document.getElementById("password1").value = "";
          document.getElementById("password2").value = "";
       setTimeout(retardo, 3000);
     }else{

  $("#mensaje4").fadeIn();
      }
    }
  }
}

  });
    });


</script>
-->
  </body>
</html>
