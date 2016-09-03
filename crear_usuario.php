<?php
  include("conectar.php");
  include_once 'config.php';


$mirut = $_POST['rut'];
$minombre = $_POST['nombre'];
$midireccion = $_POST['direccion'];
$mitelefono = $_POST['telefono'];
$micorreo = $_POST['email'];
$miclave = $_POST['password1'];
//conectar  servidor,usuario,clave,bd
conectar_mysql("localhost","edgar","aiep","ecomerce");

$sql = "INSERT INTO clientes (rut, nombre, direccion ,telefono ,correo,clave) VALUES ('".$mirut."','".$minombre."','".$midireccion."','".$mitelefono."','".$micorreo."','".$miclave."')";

//Para ejecutar la consulta necesitamos escribir el siguiente código.
 ejecutar_sql($sql);
//echo"<script language='javascript'>window.location='iniciar_sesion.html'</script>;"
header("location:registro_exitoso.php");

?>