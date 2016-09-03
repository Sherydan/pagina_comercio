<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password
$newid = uniqid(rand(), false);
$newuser = $_POST['newuser'];
$newpw = $_POST['password1'];
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];

//$newciudad = $_POST['ciudad'];
//$newrut = $_GET['rut'];
//$newtelefono = $_GET['telefono'];

$newciudad =  $_POST['ciudad'];
$newrut = $_POST['rut'];
$newtelefono = $_POST['telefono'];
    //Enabl

    //Enabl

    //Enables moderator verification (overrides user self-verification emails)
if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules
if ($pw1 != $pw2)
{

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Las claves no coinciden </div><div id="returnVal" style="display:none;">false</div>';

}
 elseif (strlen($pw1) < 4)
  {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>La clave debe tener mas de 4 caracteres</div><div id="returnVal" style="display:none;">false</div>';

} 
elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) 
{

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ingresa un email valido </div><div id="returnVal" style="display:none;">false</div>';

} 
elseif ( ($_POST['newuser']!= "") && ($_POST['password1']!= "")  ) 
{ 
   
    //Validation passed

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($newuser, $newid, $newemail, $newpw, $newciudad, $newrut, $newtelefono);

   echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';


    }

?>
